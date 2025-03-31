<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    public function empleado(Request $request){
        if($request->isMethod("get")){
            $empleados = ["Kevin","Andres","Juana"];
            $area = "Ventas";
            return view("Empleados.index",
            
        ["nombres"=>$empleados],["dato"=>$area]);
        }else if($request->isMethod("post")){
            return "Haz hecho post aqui";
        }
    }
}
