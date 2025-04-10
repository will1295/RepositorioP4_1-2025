<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;

Route::get("/",[LibroController::class,"index"])->name("index");
Route::get("/crear",[LibroController::class,"crear"])->name("crear");
Route::post("/crear",[LibroController::class,"guardar"]);