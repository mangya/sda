<?php

namespace SDA\Imports;

use File;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterImport;

use Illuminate\Http\Request;

class ExcelImport implements WithHeadingRow, WithChunkReading, WithEvents
{
    private $data;

    /**
     * Assign data to excel imports
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function chunkSize(): int
    {
        return 500;
    }

    public function registerEvents(): array
    {
        return [
            AfterImport::class => function(AfterImport $event) {
                File::delete($this->data['file']);
            }
        ];
    }
}
