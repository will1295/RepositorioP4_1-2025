<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

Route::get("/",[MyController::class,"index"]);
Route::get("/ope",[MyController::class,"operaciones"]);
Route::post("/ope",[MyController::class,"operar"]);
Route::get("/saludo",[MyController::class,"saludo"]);
Route::get("/indexp",[MyController::class,"indexp"]);
