<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CentroEstudios extends Model
{
    use HasFactory;

    const UNIVERSIDAD='01';
    const INSTITUTO='02';
    const ACADEMIA='03';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'numberId',
        'name',
        'nameSEO',
        'direccion',
        'tipo',
    ];

    public function user(){
        return $this->BelongsTo(User::class,'user_id','id');
    }

    public function admin(){
        return $this->BelongsTo(User::class,'admin','id');
    }
}
