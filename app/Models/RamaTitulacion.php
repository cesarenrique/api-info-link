<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RamaTitulacion extends Model
{
    use HasFactory;

    const TITULACION_DOCTORADO='1';
    const TITULACION_MASTER='2';
    const TITULACION_GRADO='3';
    const TITULACION_TECNICO='4';
    const CERTIFICACION_INTERNACIONAL='5';
    const CURSO_NO_OFICIAL='6';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'name',
        'direccion',
        'tipo',
    ];
}
