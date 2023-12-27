<?php

namespace App\Exports;

use App\Models\Record;
use Maatwebsite\Excel\Concerns\FromCollection;

class Recordexport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Record::select("Name", "Email","Address")->get();
    }

    public function headings(): array
    {
        return [ "Name", "Email", "Address"];
    }
}