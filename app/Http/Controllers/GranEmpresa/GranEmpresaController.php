<?php

namespace App\Http\Controllers\GranEmpresa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GranEmpresa;

class GranEmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $grandes=GranEmpresa::All();
        return response()->json(['data'=> $grandes],200);
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
        $gran=GranEmpresa::findOrFail($id);
        return response()->json(['data'=> $gran],200);
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
        $gran=GranEmpresa::findOrFail($id);
        $gran->delete();
        return response()->json(['data'=> $gran],200);
    }
}
