<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('idiomas','\App\Http\Controllers\Idioma\IdiomaController',['only'=>['show']]);
Route::get('/idiomas/e/{idioma}','\App\Http\Controllers\Idioma\IdiomaController@buscar');
Route::resource('users','\App\Http\Controllers\User\UserController',['only'=>['index','store','show','update','destroy']]);
Route::resource('pais','\App\Http\Controllers\Pais\PaisController',['only'=>['index']]);
Route::get('/provincias/pais/{paisId}','\App\Http\Controllers\Provincia\ProvinciaController@sector');
Route::get('/localidades/provincia/{provinciaId}','\App\Http\Controllers\Localidad\LocalidadController@sector');
Route::resource('personas','\App\Http\Controllers\Persona\PersonaController',['only'=>['index','store','show','update','destroy']]);
Route::resource('alumnos','\App\Http\Controllers\Alumno\AlumnoController',['only'=>['index','store','show','update','destroy']]);
Route::resource('profesores','\App\Http\Controllers\Profesor\ProfesorController',['only'=>['index','store','show','update','destroy']]);
