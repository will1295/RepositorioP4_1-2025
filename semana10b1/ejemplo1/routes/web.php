<?php

use App\Http\Controllers\ControllerDos;
use App\Http\Controllers\MiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hola', function () {
    return 'Hola Mundo';
});

Route::get('/json', function () {
    return response()->json([
        'nombre'=> 'juan',
    ]);
});

Route::get('/ejemplo', function () {
    return view('ejemplo');
});

Route::get('/miruta',
[MiController::class,'index'])->name('ruta1');

Route::get('/ruta/{id}',[ControllerDos::class,'index']);

Route::prefix('admin')->group(function () {
    Route::get('/',function(){return 'Hola Admin';});
    Route::get('/insertar',function(){return 'Haz insertado un dato';});
}
);

