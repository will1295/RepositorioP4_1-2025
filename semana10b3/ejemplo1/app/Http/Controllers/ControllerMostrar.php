<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerMostrar extends Controller
{
    public function index($id){
        if($id==1){
            return "Juan";
        }
        else{
            return "Valor invalido";
        }
        
    }
}
