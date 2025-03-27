<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiController extends Controller
{
    public function index(){
        return view("controlador");
    }

    public function editar(...$id){
        if($id==1){
            return "Juan";
        }elseif($id==2){
            return "Pedro";
        }
        else{
            return "Id desconodido";
        }
    }
}
