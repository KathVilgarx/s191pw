<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clienteController;


/* Rutas para trabajar con el clienteControlador */
Route::get('/',[clienteController::class,'home'])->name('rutainicio');

Route::get('/cliente',[clienteController::class,'index'])->name('rutaconsulta');

Route::get('/cliente/create',[clienteController::class,'create'])->name('rutacacas');

Route::post('/cliente',[clienteController::class,'store'])->name('rutaenviar');





/* Route::get('/', function () {
    return view('welcome');
}); */

/* Route::view('/', 'inicio') ->name('rutainicio');

Route::view('/form','formulario') ->name('rutacacas');

Route::view('/consultar','clientes') ->name('rutaconsulta'); */


