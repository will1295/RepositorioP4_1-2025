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
        //Consulta de select con un id especifico
        $artista = ArtistasModel::findOrFail($id);
        return view('editar',compact('artista'));
    }

    public function actualizar(Request $request,$id){
        $artista = ArtistasModel::findOrFail($id);
        $artista->nombre = $request->input('nombre');
        $artista->nacionalidad = $request->input('nacionalidad');
        $artista->save();
        return redirect()->route('index');
    }

    public function eliminar($id){
        $artista = ArtistasModel::findOrFail($id);
        $artista->delete();
        return redirect()->route('index');
    }
}
