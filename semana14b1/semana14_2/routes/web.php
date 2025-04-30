<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistaController;
use App\Http\Controllers\CancionesController;
use App\Http\Controllers\GeneroController;

Route::get('/',[ArtistaController::class,'index'])->name('index');
Route::get('/artista',[ArtistaController::class,'crear']);
Route::post('/artista',[ArtistaController::class,'guardar']);
Route::get('/editartista/{id}',[ArtistaController::class,'editar'])->name('editar');
Route::put('/editartista/{id}',[ArtistaController::class,'actualizar'])->name('actualizar');
Route::delete('/borrar/{id}',[ArtistaController::class,'eliminar'])->name('eliminar');


Route::prefix('canciones')->group(function(){
    Route::get('/',[CancionesController::class,'index'])->name('cindex');
    Route::get('/crear',[CancionesController::class,'crear']);
    Route::post('/crear',[CancionesController::class,'guardar']);
    Route::get('/editarcancion/{id}',[CancionesController::class,'editar'])->name('ceditar');
    Route::put('/editarcancion/{id}',[CancionesController::class,'actualizar'])->name('cactualizar');
    Route::delete('/borrar/{id}',[CancionesController::class,'borrar'])->name('celiminar');
});


Route::get('/genero',[GeneroController::class,'crear']);
