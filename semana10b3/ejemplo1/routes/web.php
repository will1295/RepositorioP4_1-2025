<?php

use App\Http\Controllers\ControllerMostrar;
use App\Http\Controllers\MiController;
use Illuminate\Support\Facades\Route;


Route::get('/',function(){
    return "Hello world!";
});


Route::get('/index',function(){
    return view('index');
})->name('prueba');

//Version actual de enrutamiento con controllador
Route::get('/home',[MiController::class,'index']);

Route::get('/mostrar/{id}',
[ControllerMostrar::class,'index']);
