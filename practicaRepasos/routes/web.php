<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;


Route::get('/',[ControladorVistas::class,'home'])->name('rutainicio');

Route::get('/repaso',[ControladorVistas::class,'repaso1'])->name('rutaconv');

Route::post('/mb_gb',[ControladorVistas::class,'mb_gb'])->name('mb_gb');
Route::post('/gb_mb',[ControladorVistas::class,'gb_mb'])->name('gb_mb');
Route::post('/gb_tb',[ControladorVistas::class,'gb_tb'])->name('gb_tb');
Route::post('/tb_gb',[ControladorVistas::class,'tb_gb'])->name('tb_gb');


//Route::view('/', 'inicio') ->name('rutainicio');
//Route::view('/repaso1', 'repaso1') ->name('rutaconv');
//Route::view('/tarjeta', 'tarjeta') ->name('tarjeta');