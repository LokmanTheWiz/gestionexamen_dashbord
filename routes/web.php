<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ProfesseurController;
use App\Http\Controllers\SurveillantController;
use App\Http\Controllers\ExamenController;
use App\Http\Controllers\LocalController;
use App\Http\Controllers\ModuleController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/test', function () {
//     return view('examen.test');
// });
// Route::get('/etudiant', function () {
//     return view('examen.etudiant.index');
// });
Route::resource('etudiant', EtudiantController::class);
Route::resource('professeur', ProfesseurController::class);
Route::resource('surveillant', SurveillantController::class);
Route::resource('examen', ExamenController::class);
Route::resource('local', LocalController::class);
Route::resource('module', ModuleController::class);

Route::get('search',[ProfesseurController::class,'search']);
Route::get('select',[EtudiantController::class,'select']);




Route::controller(EtudiantController::class)->group(function(){
    Route::get('etudiant-export', 'export')->name('etudiant.export');
    Route::post('etudiant-import', 'import')->name('etudiant.import');
});


Route::controller(ProfesseurController::class)->group(function(){
    Route::get('professeur-export', 'export')->name('professeur.export');
    Route::post('professeur-import', 'import')->name('professeur.import');
});