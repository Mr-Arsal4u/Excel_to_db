<?php

namespace App\Imports;

use App\Models\File;
use App\Models\Record;
use Maatwebsite\Excel\Concerns\ToModel;

class RecordImport implements ToModel
{
    protected $file;

    public function __construct(File $file)
    {
        $this->file = $file;
    }

    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Record([
            'Name' => $row[0],
            'Email' => $row[1],
            'Address' => $row[2],
            'file_id' => $this->file->id,
        ]);
    }
}
