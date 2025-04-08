<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/libros',[LibrosController::class,"index"]);
Route::get('/libros/crear',[LibrosController::class,"crear"]);
