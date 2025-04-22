<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;

Route::get("/",[LibroController::class,"index"])->name("index");
Route::get("/crear",[LibroController::class,"crear"])->name("crear");
Route::post("/crear",[LibroController::class,"guardar"]);
Route::get("editar/{id}",[LibroController::class,"editar"])->name("editar");
Route::put("editar/{id}",[LibroController::class,"actualizar"])->name("actualizar");
Route::delete("/{id}",[LibroController::class,"eliminar"])->name("eliminar");