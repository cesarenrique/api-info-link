<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models;

class Persona extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'numberId',
        'nombre',
        'apellido',
        'apellido2',
        'fechanac',
        'verification_token',
    ];

    public function user(){
        return $this->BelongsTo(User::class,'user_id','id');
    }
}
