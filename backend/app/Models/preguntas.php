<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class preguntas extends Model
{
    use HasFactory;
    protected $fillable = [
        'pregunta'
    ];

    public function quiz(){
        return $this->belongsTo(quiz::class);
    }
    public function respuesta(){
        return $this->hasMany(respuesta::class);
    }
}
