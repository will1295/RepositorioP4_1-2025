<?php

use Illuminate\Support\Facades\Route;

Route::get("/",function(){
    return view("home");
});

Route::get("/datos",function(){
    return view("info");})->name("informacion");

Route::post("/datos",function(){
    return "Haz hecho post aqui";
});

    