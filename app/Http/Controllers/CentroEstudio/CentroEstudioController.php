<?php

namespace App\Http\Controllers\CentroEstudio;

use App\Http\Controllers\Controller;
use App\Models\CentroEstudios;
use Illuminate\Http\Request;

class CentroEstudioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $centros=CentroEstudios::All();

        return response()->json(['data'=> $centros],200);
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
        $centro=CentroEstudios::findOrFail($id);
        $user=$centro->user;
        return response()->json(['data'=> $centro],200);
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
        $centro=CentroEstudios::findOrFail($id);
        $centro->delete();
        return response()->json(['data'=> $centro],200);
    }
}
