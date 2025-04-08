<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController;

Route::get("/",[LibrosController::class,"index"])->name("index");
Route::get("/crear",[LibrosController::class,"crear"])->name("crear");
Route::post("/crear",[LibrosController::class,"guardar"]);
Route::get("/editar/{id}",[LibrosController::class,"editar"])->name("editar");
Route::put("/editar/{id}",[LibrosController::class,"actualizar"])->name("actualizar");
Route::delete("/{id}",[LibrosController::class,"borrar"]);
