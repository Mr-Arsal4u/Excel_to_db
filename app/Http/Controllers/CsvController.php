<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Response;
use App\Exports\RecordExport;
use App\Imports\RecordImport;

class CsvController extends Controller
{
//     public function save(Request $request)
//     {
//         $file = $request->file('file');
//         $fileContents = file($file->getPathname());

//         foreach ($fileContents as $line) {
//             $data = str_getcsv($line);


//             Record::create([
//                 'Name' => $data[0],
//                 'Email' => $data[1],
//                 'Address' => $data[2],
//             ]);
//          }


//     return redirect()->back()->with('success', 'CSV file imported successfully.');

// }

//     public function export()
//     {
//         $records = Record::all();
//         $csvFileName = 'Record.csv';
//         $headers = [
//             'Content-Type' => 'text/csv',
//             'Content-Disposition' => 'attachment; filename="' . $csvFileName . '"',
//         ];

//         $handle = fopen('php://output', 'w');
//         fputcsv($handle, ['Name', 'Email', 'Address']);

//         foreach ($records as $record) {
//             fputcsv($handle, [$record->Name, $record->Email, $record->Address]);
//         }

//         fclose($handle);

//         return Response::make('', 200, $headers);

//     }This code is custom export and import code

    public function importExportView()
    {
        return view('import');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function export()
    {
        return Excel::download(new RecordExport, 'Records.xlsx');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function import()
    {
        Excel::import(new RecordImport, request()->file('file'));

        return back();
    }
}