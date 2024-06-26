<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'persona_id',
    ];

    public function persona(){
        return $this->BelongsTo(Persona::class,'persona_id','id');
    }

    public function centroestudios(){
        return $this->BelongsTo(CentroEstudios::class,'centro_estudios_id','id');
    }
}
