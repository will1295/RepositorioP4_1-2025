<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiControlador extends Controller
{
    public function inicio(){
        return view("index");
    }

    public function sumar(Request $request){
        $n1 = $request->input("numero1");
        $n2 = $request->input("numero2");
        return view("resultado",["total"=>$n1+$n2]);
    }

    public function indexp(){
        return view("Productos.index");
    }


}
