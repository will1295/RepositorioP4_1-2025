<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LibroController extends Controller
{
    public function index(){

        $libros = DB::select("SELECT * FROM librostbl");
        return view("index",compact("libros"));                    
    }

    public function crear(){
        return view("crear");

    }

    public function guardar(Request $request){
        $titulo = $request->input("intitulo");
        $autor = $request->input("inautor");

        DB::insert("INSERT INTO librostbl(titulo,autor) 
                VALUES(?,?)",[$titulo,$autor]);
        return redirect()->route("index");
    }

}
