<?php

namespace App\Http\Controllers\InstitucionGobierno;

use App\Http\Controllers\Controller;
use App\Models\InstitucionGobierno;
use Illuminate\Http\Request;

class InstitucionGobiernoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $gobiernos=InstitucionGobierno::All();
        return response()->json(['data'=> $gobiernos],200);
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
        $gobierno=InstitucionGobierno::findOrFail($id);
        return response()->json(['data'=> $gobierno],200);
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
        $gobierno=InstitucionGobierno::findOrFail($id);
        $gobierno->delete();
        return response()->json(['data'=> $gobierno],200);
    }
}
