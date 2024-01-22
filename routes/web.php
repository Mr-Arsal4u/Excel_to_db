<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CsvController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
 Route::post('upload',[CsvController::class,'save'])->name('upload');
/// i have created import and export function in 2 different ways first one is simple method and second one is using mattexcel package
// Route::get('export', [CsvController::class, 'export'])->name('export');


Route::get('importExportView', [CsvController::class, 'importExportView']);
Route::get('export', [CsvController::class, 'export'])->name('export');
Route::post('import', [CsvController::class, 'import'])->name('import');
Route::get('files', [CsvController::class, 'index'])->name('files');
// routes/web.php

Route::get('details/{id}',[CsvController::class,'details'])->name('details');
