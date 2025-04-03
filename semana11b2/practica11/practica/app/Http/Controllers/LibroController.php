<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index(){

        #id - titulo - autor -- disppnible
        $libros = [["id"=>1,"titulo"=>
        "Los lideres mueren los movimientos no","autor"=>
        "Jaime Lokier","disponible"=>true],
        ["id"=>2,"titulo"=>
        "La mecánica del corazón","autor"=>
        "Mathías Malzieu","disponible"=>false],
        ["id"=>3,"titulo"=>
        "Cumbres borroscosas","autor"=>
        "Emelie Bronte","disponible"=>true]];
        return view("index",["info"=>$libros]);
    }
}
