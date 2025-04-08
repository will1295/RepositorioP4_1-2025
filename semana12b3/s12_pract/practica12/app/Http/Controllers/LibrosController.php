<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbllibros;
use App\Models\tblautor;
use Illuminate\Support\Facades\DB;

class LibrosController extends Controller
{
    public function index(){
        $libros = tbllibros::with("tblautor")->get();
        return view("index",compact("libros"));
    }

    public function crear(){
        $autores = DB::select("SELECT * FROM tblautor");
        return view("crear",compact("autores"));
    }

    public function guardar(){

    }
}

