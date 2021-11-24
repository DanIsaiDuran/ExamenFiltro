<?php

use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\TablaPivoteController;
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

Route::resource('estudiante', EstudianteController::class);
Route::resource('materia', MateriaController::class)->parameters(['materia' => 'materia']);

Route::get('pivote/agregarMateria/{estudiante}', [TablaPivoteController::class, 'agregarMateria'])->name('pivote.agregarMateria');
Route::post('pivote/asignarMateria/{estudiante}', [TablaPivoteController::class, 'asignarMateria'])->name('pivote.asignarMateria');
