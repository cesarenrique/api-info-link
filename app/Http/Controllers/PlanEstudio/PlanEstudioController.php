<?php

namespace App\Http\Controllers\PlanEstudio;

use App\Http\Controllers\Controller;
use App\Models\PlanEstudios;
use Illuminate\Http\Request;

class PlanEstudioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $planes=PlanEstudios::All();

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
        $plan=PlanEstudios::findOrFail($id);

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
        $plan=PlanEstudios::findOrFail($id);
        $plan->delete();
        return response()->json(['data'=> $plan],200);
    }
}
