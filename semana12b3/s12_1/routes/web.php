<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController;

Route::get("/",[LibrosController::class,"index"])->name("index");
Route::get("/create",[LibrosController::class,"create"])->name("crear");
Route::post("/create",[LibrosController::class,"store"]);
Route::get("/editar/{id}",[LibrosController::class,"edit"])->name("editar");
Route::put("/editar/{id}",[LibrosController::class,"update"]);
Route::delete("/{id}",[LibrosController::class,"destroy"]);
