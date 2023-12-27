<?php

namespace App\Imports;

use App\Models\Record;
use Maatwebsite\Excel\Concerns\ToModel;

class RecordImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Record([
            'Name'=>$row['0'],
            'Email' => $row['1'],
            'Address' => $row['2'],
        ]);
    }
}