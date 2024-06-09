<?php

namespace App\Http\Controllers\Fundacion;

use App\Http\Controllers\Controller;
use App\Models\Fundacion;
use Illuminate\Http\Request;

class FundacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $fundacion=Fundacion::All();
        return response()->json(['data'=> $fundacion],200);
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

        $fundacion=Fundacion::findOrFail($id);
        return response()->json(['data'=> $fundacion],200);
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
        $fundacion=Fundacion::findOrFail($id);
        $fundacion->delete();
        return response()->json(['data'=> $fundacion],200);
    }
}
