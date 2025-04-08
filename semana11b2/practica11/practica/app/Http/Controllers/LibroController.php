<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibroController extends Controller
{
    private $libros = [["id"=>1,"titulo"=>
        "Los lideres mueren los movimientos no","autor"=>
        "Jaime Lokier","disponible"=>true],
        ["id"=>2,"titulo"=>
        "La mecánica del corazón","autor"=>
        "Mathías Malzieu","disponible"=>false],
        ["id"=>3,"titulo"=>
        "Cumbres borroscosas","autor"=>
        "Emelie Bronte","disponible"=>true]];

    public function index(){
        return view("index",["info"=>$this->libros]);
    }
        

    /*
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
    }*/

    //Hacer otra tabla pero que contenga informacion de autores de libros
    //Los campos deben ser nombre, nacionalidad y fecha de nacimiento
    //poner al menos tres autores 
}
