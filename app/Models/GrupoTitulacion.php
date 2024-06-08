<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupoTitulacion extends Model
{
    use HasFactory;


    const TITULACION_OFICIAL_PAIS='1';
    const CERTIFICACION_INTERNACIONAL='2';
    const CERTIFICACION_PRIVADA='3';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'name',
        'tipo',
    ];
}
