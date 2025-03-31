<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiControlador extends Controller
{
    public function index(){
        return view("index");
    }

    public function versuma(){
        return view("formsuma");
    }

    public function sumar(Request $request){
        $num1 = $request->input("num1");
        $num2 = $request->input("num2");
        $opcion = $request->input("opcion");

        if($opcion==1){
            return $num1+$num2;
        }
        else if($opcion==2){
            return $num1-$num2;
        }
        else if($opcion==3){
            return $num1*$num2;
        }
        else if($opcion==4){
            if($num2==0){
                return "No se puede dividir entre cero!";
            }
            else{
                return $num1/$num2;
            }
        }
        else{
            return "Opcion no valida";
        }
    }
}
