<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtistasModel;

class ArtistaController extends Controller
{
    public function index(){
        //Equivalente a select * from table 
        $artistas = ArtistasModel::all();
        return view ('index',compact('artistas'));
    }

    public function crear(){
        return view('crear');
    }

    public function guardar(Request $request){

        //ArtistasModel::create($request->all());
        ArtistasModel::create([
            'nombre' => $request->nom,
            'nacionalidad' => $request->nacio
            ]
        );
        return redirect()->route('index');
    }

    public function editar($id){
        $artista = ArtistasModel::findOrFail($id);
        return view('editar',compact('artista'));
    }

    public function actualizar(){

    }

    public function eliminar(){

    }
}
