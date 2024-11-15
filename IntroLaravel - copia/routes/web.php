<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\clienteController;

/* Rutas para trabajar con el controladorVistas */
Route::get('/',[controladorVistas::class,'home'])->name('rutainicio');

Route::get('/consultar',[controladorVistas::class,'select'])->name('rutaconsulta');

Route::view('/component','componentes') ->name('componentes');

Route::post('/enviarCliente',[controladorVistas::class,'procesarCliente'])->name('rutaenviar');


/* Rutas para trabajar con el clienteControlador */
Route::get('/cliente/create',[clienteController::class,'create'])->name('rutacacas');



/* Route::get('/', function () {
    return view('welcome');
}); */

/* Route::view('/', 'inicio') ->name('rutainicio');

Route::view('/form','formulario') ->name('rutacacas');

Route::view('/consultar','clientes') ->name('rutaconsulta'); */


