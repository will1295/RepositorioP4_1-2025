<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\EtiquetasController;
use App\Http\Controllers\CategoriasController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource("productos",ProductosController::class);
Route::apiResource("etiquetas",EtiquetasController::class);
Route::apiResource("categorias",CategoriasController::class);
