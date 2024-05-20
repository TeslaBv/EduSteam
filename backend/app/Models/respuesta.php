<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class respuesta extends Model
{
    use HasFactory;
    protected $fillable = [
        'respuesta',
        'correcto',
    ];

    public function preguntas(){
        return $this->belongsTo(preguntas::class);
    }
}
