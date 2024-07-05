<?php

use App\Http\Controllers\DirectorioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', [DirectorioController::class,'paginaInicio']);

Route::get('/crear/entrada', [DirectorioController::class,'crearDirectorio'])->name('crear.entrada');

Route::get('/buscar/entrada', [DirectorioController::class,'buscarDirectorio'])->name('buscar.entrada');

Route::get('/ver/entrada', [DirectorioController::class,'verEntrada'])->name('ver.entrada');

Route::get('/eliminar/entrada', [DirectorioController::class,'eliminarEntrada'])->name('eliminar.entrada');