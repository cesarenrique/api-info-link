<?php

namespace App\Http\Controllers\Autonomo;

use App\Http\Controllers\Controller;
use App\Models\Autonomo;
use Illuminate\Http\Request;

class AutonomoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $autonomos=Autonomo::All();
        return response()->json(['data'=> $autonomos],200);
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
        $autonomo=Autonomo::findOrFail($id);
        return response()->json(['data'=> $autonomo],200);
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
        $autonomo=Autonomo::findOrFail($id);
        $autonomo->delete();
        return response()->json(['data'=> $autonomo],200);
    }
}
