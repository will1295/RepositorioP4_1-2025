<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function(){
    return "Hello World!";
});

Route::get('/inicio',function(){
    return view('home');
});

Route::post('/inicio',function(){
    return "Hola Mundo!";
});


Route::get('/controlador',[MiController::class,'index']);

Route::get("/editar/{id?}",[MiController::class,"editar"]);