<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/registrolibro', function () {
    return view('registrolibro');
});