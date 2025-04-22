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

    public function editar($id){
        $libro = DB::select("SELECT * FROM librostbl WHERE id=?",[$id])[0];
        return view("editar",compact("libro"));
    }

    public function actualizar(Request $request,$id){
        $titulo = $request->input("intitulo");
        $autor = $request->input("inautor");
        $disponible = $request->has("dispon") ? 1:0;
        DB::update("UPDATE librostbl SET titulo=?,autor=?,dispon=?
         WHERE id=?",[$titulo,$autor,$disponible,$id]);
        return redirect()->route("index");

    }

    public function eliminar($id){
        DB::delete("DELETE FROM librostbl WHERE id=?",[$id]);
        return redirect()->route("index");

    }

}
