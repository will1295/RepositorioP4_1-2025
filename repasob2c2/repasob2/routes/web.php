<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistaController;
use App\Http\Controllers\CancionesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/artistas',[ArtistaController::class,'crear']);
Route::get('/canciones',[CancionesController::class,'crear']);
