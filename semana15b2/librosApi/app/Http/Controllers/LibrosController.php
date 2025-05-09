<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libros;

class LibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libros = Libros::all();
        return response()->json($libros);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $libro = Libros::create($request->all());
        return response()->json($libro);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $libro = Libros::findOrFail($id);
        return response()->json($libro);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $libro = Libros::findOrFail($id);
        $libro->update($request->all());
        return response()->json($libro);
      
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Libros::findOrFail($id)->delete();
        return response()->json(null,204);
    }
}
