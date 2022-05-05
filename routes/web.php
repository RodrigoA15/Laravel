<?php

use App\Http\Controllers\ejercicio1Controller;
use App\Http\Controllers\ejercicio2Controller;
use App\Http\Controllers\ejercicio3Controller;
use App\Http\Controllers\ejercicio5Controller;
use App\Http\Controllers\ejercicio6Controller;
use App\Http\Controllers\Practica1_Controller;
use App\Http\Controllers\practica2Controller;
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
    return view('Template.Template');
});
    


Route::get('/practica1', [Practica1_Controller::class, 'verformulariopractica1'])->name('ejercicio1'); //ruta interna 

Route::post('resultado_pr1', [Practica1_Controller::class, 'resultado_practica1'])->name('resultado_pr1');

Route::get('/practica2', [practica2Controller::class, 'practica2']) ->name('practica2');

Route::post('resultado_pr2', [practica2Controller::class, 'resultado_pr2'])->name('resultado_pr2');

//EJERCICIOS LARAVEL

Route::get('ejercicio1', [ejercicio1Controller::class, 'verformulario1'])->name('ejercicio1');
Route::post('resultado1', [ejercicio1Controller::class, 'resultado1'])->name('resultado1');

Route::get('ejercicio2', [ejercicio2Controller::class, 'verformulario2'])->name('ejercicio2');
Route::post('resultado_ejer2', [ejercicio2Controller::class, 'resultado_ejer2'])->name('resultado_ejer2');

Route::get('ejercicio3', [ejercicio3Controller::class, 'verformulario3'])->name('ejercicio3');
Route::post('resultado3', [ejercicio3Controller::class, 'resultado3'])->name('resultado3');

Route::get('/ejercicio5', [ejercicio5Controller::class, 'formulario5'])->name('ejercicio5');
Route::post('/resultado5', [ejercicio5Controller::class, 'resultado5'])->name('resultado5');

Route::get('/ejercicio6', [ejercicio6Controller::class, 'formulario6'])->name('ejercicio6');
Route::post('/resultado6', [ejercicio6Controller::class, 'resultado6'])->name('resultado6');