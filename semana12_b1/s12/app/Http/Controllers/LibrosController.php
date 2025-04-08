<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LibrosController extends Controller
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
        //librostbl --- titulo y autor
        DB::insert("INSERT INTO librostbl(titulo,autor) VALUES(?,?)",[$titulo,$autor]);
        return redirect()->route("index");
    }

    public function editar($id){
        $libro = DB::select("SELECT * FROM librostbl WHERE id=?",[$id])[0]; 
        return view("editar",compact("libro"));
    }

    public function actualizar(Request $request,$id){
        $titulo = $request->input("intitulo");
        $autor = $request->input("inautor");
        $disp = $request->has("disponible") ? 1:0;

        DB::update("UPDATE librostbl SET titulo=?,autor=?
        ,disponibilidad=? WHERE id=?",[$titulo,$autor,$disp,$id]);

        return redirect()->route("index");

    }

    public function borrar($id){
        DB::delete("DELETE FROM librostbl WHERE id=?",[$id]);
        return redirect()->route("index");
    }
}
