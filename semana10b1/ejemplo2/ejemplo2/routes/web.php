<?php

use Illuminate\Support\Facades\Route;

Route::get("/",function(){
    return view("home");
});

Route::get("/infor",function(){
    return view("info");
})->name("informacion");

Route::post("/infor",function(){
    return "Haz hecho post en esta url";
});