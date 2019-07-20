<?php

namespace SDA\Http\Controllers;

use DB;
use File;
use SDA\Imports\ExcelImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

use SDA\Http\Requests;
use SDA\Http\Controllers\Controller;
use SDA\Http\Controllers\CommonController;

class ImportController extends Controller
{
    use CommonController;

    // import data from csv to database
    public function import(Request $request)
    {
        set_time_limit(0);

        if ($request->has('module') && $request->get('module') && $request->hasFile('import_file')) {
            $module = $request->get('module');
            $csv_file = $request->file('import_file');
            $file_name = "import_file." . $csv_file->getClientOriginalExtension();
            $csv_file->move(storage_path('app'), $file_name);
            $token = $request->header('X-CSRF-TOKEN');
            $module_slug = $this->getModuleSlug($module);

            if (File::exists(storage_path('app/' . $file_name))) {
                $records = Excel::toArray(new ExcelImport([
                    'file' => storage_path('app/' . $file_name)
                ]), storage_path('app/' . $file_name));

                if ($records && count($records)) {
                    $records = $records[0];
                    $errors = [];
                    $saved = false;

                    foreach ($records as $record) {
                        $record['_token'] = $token;

                        foreach ($record as $key => $value) {
                            $value = trim($value);

                            if (in_array(strtolower($value), ['na', 'null']) || !$value) {
                                $value = null;
                            }

                            if ($key == "password") {
                                $value = bcrypt($value);
                            }

                            $record[$key] = $value;
                        }

                        $module_request = Request::create(config('app.url') . '/api/doc/create/' . $module_slug, 'POST', $record);

                        try {
                            $response_data = app()->handle($module_request);
                        }
                        catch(Exception $e) {
                            array_push($errors, $e->getMessage());
                            continue;
                        }

                        if (isset($response_data) && $response_data) {
                            $response = json_decode($response_data->getContent());

                            if (isset($response->status_code) && $response->status_code === 200) {
                                $saved = true;
                            } elseif (isset($response->message)) {
                                $saved = false;
                                array_push($errors, $response->message);
                            }
                        } else {
                            array_push($errors, "Data not saved. Please try again...!!!");
                        }
                    }
                }

                if ($errors && count($errors)) {
                    $error_msg = implode("<br>", $errors);
                    session()->flash('msg', $error_msg);

                    return response()->json([
                        'success' => false,
                        'msg' => $error_msg
                    ], 200);
                } else {
                    return response()->json([
                        'success' => true,
                        'msg' => "Import successful"
                    ], 200);
                }
            }
        } else {
            return response()->json([
                'success' => false,
                'msg' => "Please provide Module"
            ], 400);
        }
    }
}
