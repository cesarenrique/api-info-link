<?php

namespace App\Http\Controllers\Pymes;

use App\Http\Controllers\Controller;
use App\Models\Pyme;
use Illuminate\Http\Request;

class PymesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pymes=Pyme::All();
        return response()->json(['data'=> $pymes],200);
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
        $pyme=Pyme::findOrFail($id);
        return response()->json(['data'=> $pyme],200);
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
        $pyme=Pyme::findOrFail($id);
        $pyme->delete();
        return response()->json(['data'=> $pyme],200);
    }
}
