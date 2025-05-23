<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CancionesModel;
use App\Models\ArtistasModel;

class CancionesController extends Controller
{
    public function index(){
        $canciones = CancionesModel::with("artistas")->get();
        return view('canciones.index',compact('canciones'));

    }

    public function crear(){
        $artistas = ArtistasModel::all();
        return view('canciones.crear',compact('artistas'));
    }

    public function guardar(Request $request){
        CancionesModel::create($request->all());
        return redirect()->route('cindex');
    }

    public function editar($id){
        $cancion = CancionesModel::findOrFail($id);
        $artistas = ArtistasModel::all();
        return view('canciones.editar',compact('cancion','artistas'));

    }

    public function actualizar(Request $request, $id){
        $cancion = CancionesModel::findOrFail($id);
        $cancion->nombre = $request->input('nombre');
        $cancion->duracion = $request->input('duracion');
        $cancion->idartista = $request->input('idartista');
        $cancion->save();
        return redirect()->route('cindex');

    }

    public function borrar($id){
        $cancion = CancionesModel::findOrFail($id);
        $cancion->delete();
        return redirect()->route('cindex');
    }

}
