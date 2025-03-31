<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MiControlador;
use App\Http\Controllers\ControladorProductos;
use App\Http\Controllers\ControladorTareas;

Route::get("/",[MiControlador::class,"inicio"]);
Route::post("/",[MiControlador::class,"sumar"]);
/*
Primera opcion
Route::get("/indexp",[MiControlador::class,"inicio"]);
Route::get("/formp",[MiControlador::class,"inicio"]);
Route::post("/crearp",[MiControlador::class,"inicio"]);
Route::get("/editp",[MiControlador::class,"inicio"]);
Route::put("/updp",[MiControlador::class,"inicio"]);
Route::get("/verpro",[MiControlador::class,"inicio"]);
Route::delete("/delpro",[MiControlador::class,"inicio"]);
*/

/*
Route::group("productos",function(){
    Route::get("/index",[MiControlador::class,"inicio"]);
    Route::get("/create",[MiControlador::class,"inicio"]);
    Route::post("/store",[MiControlador::class,"inicio"]);
    Route::get("/edit",[MiControlador::class,"inicio"]);
    Route::put("/update",[MiControlador::class,"inicio"]);
    Route::get("/show",[MiControlador::class,"inicio"]);
    Route::delete("/destroy",[MiControlador::class,"inicio"]);
});

Route::group("usuarios",function(){
    Route::get("/index",[MiControlador::class,"inicio"]);
    Route::get("/create",[MiControlador::class,"inicio"]);
    Route::post("/store",[MiControlador::class,"inicio"]);
    Route::get("/edit",[MiControlador::class,"inicio"]);
    Route::put("/update",[MiControlador::class,"inicio"]);
    Route::get("/show",[MiControlador::class,"inicio"]);
    Route::delete("/destroy",[MiControlador::class,"inicio"]);
});
*/
Route::match(["get","post"],"/x",function(){
    return "El controlador aqui";
});
Route::any("/tareas",[ControladorTareas::class,"tareas"]);




