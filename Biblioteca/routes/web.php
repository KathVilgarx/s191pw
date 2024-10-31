<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

Route::get('/',[controladorVistas::class,'inicio'])->name('rutainicio');


Route::get('/registrolibro',[controladorVistas::class,'registrolibro'])->name('rutaregistro');


Route::post('/validarlibro',[controladorVistas::class,'validarlibro'])->name('rutavalidarlibro');
