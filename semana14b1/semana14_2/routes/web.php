<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistaController;
use App\Http\Controllers\CancionesController;
use App\Http\Controllers\GeneroController;

Route::get('/',[ArtistaController::class,'index'])->name('index');
Route::get('/artista',[ArtistaController::class,'crear']);
Route::post('/artista',[ArtistaController::class,'guardar']);
Route::get('/editartista/{id}',[ArtistaController::class,'editar'])->name('editar');
Route::get('/cancion',[CancionesController::class,'crear']);
Route::get('/genero',[GeneroController::class,'crear']);
