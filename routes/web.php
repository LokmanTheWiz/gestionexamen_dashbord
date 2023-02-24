<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ProfesseurController;
use App\Http\Controllers\SurveillantController;
use App\Http\Controllers\ExamenController;
use App\Http\Controllers\LocalController;

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


