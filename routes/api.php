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
Route::resource('grupotitulaciones','\App\Http\Controllers\GrupoTitulacion\GrupoTitulacionController',['only'=>['index','store','show','update','destroy']]);
Route::resource('ramatitulaciones','\App\Http\Controllers\RamaTitulacion\RamaTitulacionController',['only'=>['index','store','show','update','destroy']]);
Route::resource('centroestudios','\App\Http\Controllers\CentroEstudio\CentroEstudioController',['only'=>['index','store','show','update','destroy']]);
Route::resource('titulaciones','\App\Http\Controllers\Titulacion\TitulacionController',['only'=>['index','store','show','update','destroy']]);
Route::resource('planestudios','\App\Http\Controllers\PlanEstudio\PlanEstudioController',['only'=>['index','store','show','update','destroy']]);
Route::resource('planestudiosespecializados','\App\Http\Controllers\PlanEstudioEspecializado\PlanEstudioEspecializadoController',['only'=>['index','store','show','update','destroy']]);
Route::resource('asignaturas','\App\Http\Controllers\Asignatura\AsignaturaController',['only'=>['index','store','show','update','destroy']]);
Route::resource('organismos','\App\Http\Controllers\Organismo\OrganismoController',['only'=>['index','store','show','update','destroy']]);
Route::resource('instituciones','\App\Http\Controllers\InstitucionGobierno\InstitucionGobiernoController',['only'=>['index','store','show','update','destroy']]);
Route::resource('fundaciones','\App\Http\Controllers\Fundacion\FundacionController',['only'=>['index','store','show','update','destroy']]);
Route::resource('ongs','\App\Http\Controllers\ONG\ONGController',['only'=>['index','store','show','update','destroy']]);
Route::resource('empresas','\App\Http\Controllers\Empresa\EmpresaController',['only'=>['index','store','show','update','destroy']]);
Route::resource('autonomos','\App\Http\Controllers\Autonomo\AutonomoController',['only'=>['index','store','show','update','destroy']]);
Route::resource('pymes','\App\Http\Controllers\Pymes\PymesController',['only'=>['index','store','show','update','destroy']]);
Route::resource('grandesempresas','\App\Http\Controllers\GranEmpresa\GranEmpresaController',['only'=>['index','store','show','update','destroy']]);
