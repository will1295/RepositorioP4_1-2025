<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerDos extends Controller
{
    public function index($id){
        if($id==1){
            return "Juan";
        }
        else{
            return "Id incorrecto";
        }
    }
}
