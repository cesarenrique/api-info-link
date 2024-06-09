<?php

namespace App\Http\Controllers\PlanEstudioEspecializado;

use App\Http\Controllers\Controller;
use App\Models\PlanEstudiosEspecializado;
use Illuminate\Http\Request;

class PlanEstudioEspecializadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $planes=PlanEstudiosEspecializado::All();

        return response()->json(['data'=> $planes],200);
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
        $plan=PlanEstudiosEspecializado::findOrFail($id);

        return response()->json(['data'=> $plan],200);
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
        $plan=PlanEstudiosEspecializado::findOrFail($id);
        $plan->delete();
        return response()->json(['data'=> $plan],200);
    }
}
