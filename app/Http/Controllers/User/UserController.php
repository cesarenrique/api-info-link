<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $usuarios=User::All();
        return response()->json(['data'=> $usuarios],200);
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
            'name' => 'required|min:6',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ];
        $this->validate($request,$reglas);
        $campos = $request->all();
        $campos['password'] = bcrypt($request->password);
        $campos['verified'] = User::USUARIO_NO_VERIFICADO.'';
        $campos['verification_token']=User::generarVerificationToken();
        $campos['admin'] = User::USUARIO_REGULAR.'';

        $usuario = User::create($campos);

        return response()->json(['data'=> $usuario],201);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $user=User::findOrFail($id);

        return response()->json(["data" => $user],200);
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
        $user= User::findOrFail($id);

        $reglas =[
            'email' => 'email|unique:users,email,'.$user->id,
            'password' => 'min:6|confirmed',
            'admin' => 'in:'.User::USUARIO_ADMINISTRADOR.','.User::USUARIO_REGULAR,
        ];

        $this->validate($request,$reglas);

        if($request->has('name') && $user->name != $request->name){
            $user->name= $request->name;
        }

        if($request->has('email') && $user->email != $request->email){
            $user->verified= User::USUARIO_NO_VERIFICADO;
            $user->verification_token= User::generarVerificationToken();
            $user->email =$request->email;
        }

        if($request->has('password')){
            $user->password = bcrypt($request->password);
        }

        if($request->has('admin')){
            if(!$user->esVerificado()){
                return response()->json(['error'=> 'Unicamente los usuario verificados pueden cambiar su valor de administrador'
                        , 'code'=>409],409 );
            }
            $user->admin = $request->admin;
        }
        if(!$user->isDirty()){
            if(!$user->esVerificado()){
                return response()->json(['error'=> 'Se debe especificar al menos un campo diferente para actualizar'
                    , 'code'=>422],422 );
            }
        }
        $user->save();

        return response()->json(["data" => $user],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user=User::findOrFail($id);

        $user->delete();

        return response()->json(["data" => $user],200);
    }
}
