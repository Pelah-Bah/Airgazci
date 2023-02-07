<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductionController;
use App\Http\Controllers\FamilleController;
use App\Http\Controllers\BouteilleController;
use App\Http\Controllers\LivraisonController;
use App\Http\Controllers\StockageController;
use App\Http\Controllers\FormatController;
use App\Http\Controllers\SimpleExcelController;
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
Route::get('productions/create', function () {
    return view('create');
});

// Importer un fichier Excel
//Route::post("simple-excel/import", "SimpleExcelController@import")->name('excel.import');

/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('accueil');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource("/client", ClientController::class)->middleware(['auth', 'is_admin']);
Route::resource("/format", FormatController::class)->middleware(['auth', 'is_admin']);
Route::resource("/production", ProductionController::class)->middleware(['auth', 'is_stock']);
Route::resource("/boutstockage", StockageController::class)->middleware(['auth', 'is_stock']);
Route::resource("/famille", FamilleController::class)->middleware(['auth', 'is_admin']);
Route::resource("/bouteille", BouteilleController::class)->middleware(['auth', 'is_admin']);
Route::resource("/livraison", LivraisonController::class)->middleware(['auth', 'is_livraison']);
Route::resource("/importation", SimpleExcelController::class)->middleware(['auth', 'is_admin']);


require __DIR__.'/auth.php';