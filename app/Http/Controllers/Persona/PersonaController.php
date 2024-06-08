<?php

namespace App\Http\Controllers\Persona;

use App\Http\Controllers\Controller;
use App\Models\Persona;
use App\Models\User;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $personas=Persona::All();

        return response()->json(['data'=> $personas],200);
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
        $reglas =[
            'nombre' => 'required|min:6',
            'apellido' => 'required|min:6',
            'apellido2' => 'min:6',
            'numberID' => 'required|unique:persons',
            'fechanac' => 'required|min:6'
        ];
        $this->validate($request,$reglas);
        $campos = $request->all();
        $usuario = User::create($campos);

        return response()->json(['data'=> $usuario],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $persona=Persona::findOrFail($id);

        return response()->json(['data'=> $persona],200);
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
        $persona=Persona::findOrFail($id);

        $persona->delete();

        return response()->json(['data'=> ['personas'=>$persona]],200);
    }
}
