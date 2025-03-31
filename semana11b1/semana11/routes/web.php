<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MiControlador;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\EmpleadosController;

Route::get("/",[MiControlador::class,"index"]);
Route::get("/sumar",[MiControlador::class,"versuma"]);
Route::post("/sumar",[MiControlador::class,"sumar"]);

Route::get("/clientes",[ClientesController::class,"index"]);

/*
Route::get("/productos",[ProductosController::class,"index"]);
Route::get("/formprod",[ProductosController::class,"create"]);
Route::post("/formprod",[ProductosController::class,"store"]);
Route::get("/producto",[ProductosController::class,"show"]);
Route::get("/editprod",[ProductosController::class,"edit"]);
Route::update("/editprod",[ProductosController::class,"update"]);
Route::delete("/delprod",[ProductosController::class,"delete"]);

Route::group("/productos",function(){
    Route::get("/",[ProductosController::class,"index"]);
    Route::get("/create",[ProductosController::class,"create"]);
    Route::post("/store",[ProductosController::class,"store"]);
    Route::get("/show",[ProductosController::class,"show"]);
    Route::get("/edit",[ProductosController::class,"edit"]);
    Route::update("/update",[ProductosController::class,"update"]);
    Route::delete("/delete",[ProductosController::class,"delete"]);
});

Route::group("/clientes",function(){
    Route::get("/",[ProductosController::class,"index"]);
    Route::get("/create",[ProductosController::class,"create"]);
    Route::post("/store",[ProductosController::class,"store"]);
    Route::get("/show",[ProductosController::class,"show"]);
    Route::get("/edit",[ProductosController::class,"edit"]);
    Route::update("/update",[ProductosController::class,"update"]);
    Route::delete("/delete",[ProductosController::class,"delete"]);
});

Route::match(["get,post"],"/productos"
,[ProductosController::class,"index"]);
*/

Route::any("/empleados",[EmpleadosController::class,"empleado"]);
