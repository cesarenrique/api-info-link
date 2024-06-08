<?php

namespace App\Http\Controllers\RamaTitulacion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RamaTitulacion;

class RamaTitulacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $titulaciones=RamaTitulacion::All();
        return response()->json(['data'=> $titulaciones],200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $titulacion=RamaTitulacion::findOrFail($id);
        return response()->json(['data'=> $titulacion],200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $titulacion=RamaTitulacion::findOrFail($id);
        $titulacion->delete();
        return response()->json(['data'=> $titulacion],200);
    }
}
