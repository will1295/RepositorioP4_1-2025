<?php

namespace App\Http\Controllers;

use App\Models\LibrosModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libros = DB::select("select * from tbl_libros");
        return view("index",compact("libros"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $titulo = $request->input("intitulo");
        $autor = $request->input("inautor");
        #$dispo = $request->input("checkdis");
        DB::insert("INSERT INTO tbl_libros(titulo,autor) 
                VALUES(?,?)",[$titulo,$autor]);
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(LibrosModel $librosModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LibrosModel $librosModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LibrosModel $librosModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       $libro = LibrosModel::findOrFail($id);
       $libro->delete();
       return redirect()->route('index');
    }
}
