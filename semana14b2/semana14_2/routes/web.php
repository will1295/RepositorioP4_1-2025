<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistaController;
use App\Http\Controllers\CancionesController;


Route::get('/',[CancionesController::class,'index'])->name('index');
Route::get('/crear',[CancionesController::class,'crear'])->name('crear');
Route::post('/crear',[CancionesController::class,'guardar'])->name('guardar');
Route::get('/editar/{id}',[CancionesController::class,'editar'])->name('editar');
Route::put('/editar/{id}',[CancionesController::class,'actualizar'])->name('actualizar');
Route::delete('/borrar/{id}',[CancionesController::class,'borrar'])->name('borrar');
#Route::get('/artistas',[ArtistaController::class,'crear']);
#Route::get('/canciones',[CancionesController::class,'crear']);
