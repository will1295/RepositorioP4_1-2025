<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorTareas extends Controller
{
    public function tareas(Request $request){
        if($request->isMethod("get")){
            return view("tareas.index");
        }
        else if($request->isMethod("post")){
            return "Haz hecho post!";
        }
    }
}
