<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Titulacion extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'name',
        'nameSEO',
        'centro_estudios_id',
        'grupo_titulaciones_id',
        'rama_titulaciones_id',
    ];

    public function grupotitulaciones(){
        return $this->BelongsTo(GrupoTitulacion::class,'grupo_titulaciones_id','id');
    }

    public function ramatitulaciones(){
        return $this->BelongsTo(RamaTitulacion::class,'rama_titulaciones_id','id');
    }
}
