<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index(){
        return view("index");
    }

    public function operaciones(){
        return view("operaciones");
    }

    public function operar(Request $request){
        $n1 = $request->input("numero1");
        $n2 = $request->input("numero2");
        $op = $request->input("op");

        if($op==1){
            return $n1+$n2;
        }
        else if($op==2){
            return $n1-$n2;
        }
        else if($op==3){
            return $n1*$n2;
        }
        else if($op==4){
            return $n1/$n2;
        }
        else{
            return "Valor no valido";
        }

    }

    public function saludo(){
        #$nombre = "Juan";

        $nombres = ["Juan","Maria","Angel","Ana"];

        return view("saludo",["nombres"=>$nombres]);
    }

    public function indexp(){
        return view("productos.index");
    }
}
