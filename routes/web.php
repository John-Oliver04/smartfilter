<?php

use App\Http\Controllers\BeneficiaryController;
use App\Http\Controllers\ExcelfileController;
use App\Http\Controllers\TableCollectionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    // Route::post('/create-database', [DatabaseController::class, 'post'])->name("create-database");
    Route::post('/tables-import-beneficiaries', [BeneficiaryController::class, 'importbene'])->name("tables-import-beneficiaries");
    Route::post('/tables-filter-beneficiaries', [BeneficiaryController::class, 'filterbene'])->name("tables-filter-beneficiaries");
    Route::get('/tables',[BeneficiaryController::class,'index'])->name('tables');
    Route::post('/tables/add-to-collections',[TableCollectionController::class, 'store'])->name('add-to-collections');
    Route::get('/collection',[TableCollectionController::class,'index'])->name('collection');
});

require __DIR__.'/auth.php';
