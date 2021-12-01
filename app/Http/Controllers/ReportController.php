<?php

namespace SDA\Http\Controllers;

use File;
use SDA\Exports\ExcelExport;
use Maatwebsite\Excel\Facades\Excel;
use SDA\Http\Controllers\CommonController;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ReportController extends Controller
{
    use CommonController;

    // Show list of all reports for the app
    public function show()
    {
        if (in_array(auth()->user()->role, ["System Administrator", "Administrator"])) {
            $app_reports = config('reports');
            return view('layouts.origin.reports')->with(['data' => $app_reports]);
        } else {
            return back()->withInput()->with(['msg' => 'You are not authorized to view "Reports"']);
        }
    }

    public function showReport(Request $request, $report_name)
    {
        $user_role = auth()->user()->role;

        if (in_array($user_role, ["System Administrator", "Administrator"])) {
            if (isset(config('reports')[Str::studly($report_name)])) {
                $report_config = config('reports')[Str::studly($report_name)];
            } else {
                session()->flash('success', false);
                return redirect()->route('home')->with('msg', 'No such report found');
            }

            if (isset($report_config['allowed_roles']) && !in_array($user_role, $report_config['allowed_roles'])) {
                return redirect()->route('home')->with('msg', 'You are not authorized to view "' . awesome_case($report_name) . '"');
            }

            if ($request->has('download') && $request->get('download') == 'Yes') {
                $report_data = $this->getData($request, $report_name, true);

                if ($request->has('format') && $request->get('format')) {
                    return $this->downloadReport(Str::studly($report_name), $report_data['columns'], $report_data['rows'], $request->get('format'));
                } else {
                    return $this->downloadReport(Str::studly($report_name), $report_data['columns'], $report_data['rows']);
                }
            } else {
                if ($request->ajax()) {
                    $report_data = $this->getData($request, $report_name);

                    if (isset($report_data['module']) && $report_data['module']) {
                        $report_data['module_slug'] = $this->getModuleSlug($report_data['module']);
                    }

                    return $report_data;
                } else {
                    return view('templates.report_view', [
                        'title' => awesome_case($report_name),
                        'file' => 'layouts.reports.' . $report_name
                    ]);
                }
            }
        } else {
            return redirect()->route('home')->with('msg', 'You are not authorized to view "Reports"');
        }
    }

    public function getData($request, $report_name, $download = false)
    {
        $report_controller = app("SDA\\Http\\Controllers\\Reports\\" . Str::studly($report_name));

        if ($request->has('per_page') && $request->get('per_page')) {
            $per_page = (int) $request->get('per_page');
        } else {
            $per_page = 50;
        }

        return $report_controller->getData($request, $per_page, $download);
    }

    // download report in xls, xlsx, csv formats
    public function downloadReport($report_name, $columns, $rows, $format, $action = null)
    {
        if ($format) {
            if (!in_array($format, ['xls', 'xlsx', 'csv'])) {
                $format = 'xlsx';
            }
        } else {
            $format = 'xlsx';
        }

        // remove row property if not included in columns
        foreach($rows as $index => $row) {
            foreach ($row as $key => $value) {
                if (!in_array($key, $columns)) {
                    unset($rows[$index]->$key);
                }
            }
        }

        if ($format !== "csv") {
            foreach ($columns as $idx => $column) {
                $columns[$idx] = awesome_case($column);

                if (strpos($columns[$idx], 'Id') !== false) {
                    $columns[$idx] = str_replace("Id", "ID", $columns[$idx]);
                }
            }
        }

        $filename = $report_name . "-" . date('Y-m-d H:i:s');

        $export_data = [
            'headings' => $columns,
            'rows' => $rows,
            'filename' => $filename,
            'format' => $format
        ];

        return Excel::download(new ExcelExport($export_data), $filename . '.' . $format);
    }
}
