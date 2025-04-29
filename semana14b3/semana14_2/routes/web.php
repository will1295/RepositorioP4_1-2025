<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicosController;

Route::get('/',[MusicosController::class,'index'])->name('index');
Route::get('/crear',[MusicosController::class,'crear']);
Route::get('/editar/{id}',[MusicosController::class,'editar'])->name('editar');
Route::post('/crear',[MusicosController::class,'guardar']);
