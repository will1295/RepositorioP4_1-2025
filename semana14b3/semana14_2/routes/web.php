<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicosController;
use App\Http\Controllers\CancionesController;

Route::get('/',[MusicosController::class,'index'])->name('index');
Route::get('/crear',[MusicosController::class,'crear']);
Route::get('/editar/{id}',[MusicosController::class,'editar'])->name('editar');
Route::put('/editar/{id}',[MusicosController::class,'actualizar'])->name('actualizar');
Route::post('/crear',[MusicosController::class,'guardar']);
Route::delete('/borrar/{id}',[MusicosController::class,'borrar'])->name('borrar');

Route::prefix('canciones')->group(function(){
    Route::get('/',[CancionesController::class,'index'])->name('cindex');
    Route::get('/crear',[CancionesController::class,'crear']);
    Route::post('/crear',[CancionesController::class,'guardar']);
    Route::get('/editar/{id}',[CancionesController::class,'editar'])->name('ceditar');
    Route::put('/editar/{id}',[CancionesController::class,'actualizar'])->name('cactualizar');
    Route::delete('/borrar/{id}',[CancionesController::class,'borrar'])->name('cborrar');
});
