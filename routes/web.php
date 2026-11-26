<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');


Route::get('/catalogo', function () {
    return view('catalogo');
})->name('catalogo');

Route::get ('/soluciones', function () {
    return view('soluciones');
})->name('soluciones');

Route::get ('/multimedia', function () {
    return view('multimedia');
})->name('multimedia');

Route::get ('/acerca', function () {
    return view('acerca');
})->name('acerca');

Route::get ('/referencias', function () {
    return view('referencias');
})->name('referencias');