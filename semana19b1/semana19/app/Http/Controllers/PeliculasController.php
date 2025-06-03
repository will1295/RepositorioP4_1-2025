<?php

namespace App\Http\Controllers;
use App\Models\Peliculas;
use Illuminate\Http\Request;

class PeliculasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Peliculas::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pelicula = Peliculas::create($request->all());
        return response()->json($pelicula,201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pelicula = Peliculas::findOrFail($id);
        return response()->json($pelicula,200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pelicula = Peliculas::findOrFail($id);
        $info = $request->json()->all();
        $pelicula->fill($info);
        $pelicula->save();
        return response()->json([
            "mensaje"=>"Informacion de pelicula actualizada correctamente",
            "pelicula"=>$pelicula
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pelicula = Peliculas::findOrFail($id);
        $pelicula->delete();
        return response()->json([
            "mensaje"=>"Pelicula eliminada correctamente"
        ],200);
    }
}
