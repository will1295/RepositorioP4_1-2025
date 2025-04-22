<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistaController;
use App\Http\Controllers\CancionesController;
use App\Http\Controllers\GeneroController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/artista',[ArtistaController::class,'crear']);
Route::get('/cancion',[CancionesController::class,'crear']);
Route::get('/genero',[GeneroController::class,'crear']);
