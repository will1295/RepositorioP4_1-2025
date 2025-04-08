<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController;

Route::get("/",[LibrosController::class,"index"])->name("index");
Route::get("/crear",[LibrosController::class,"crear"])->name("crear");
Route::post("/crear",[LibrosController::class,"guardar"]);
Route::delete("/{id}",[LibrosController::class,"borrar"]);
