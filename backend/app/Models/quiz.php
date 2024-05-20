<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quiz extends Model
{
    use HasFactory;
    protected $fillable = ['titulo'];

    public function tema(){
        return $this->hasOne(tema::class);
    }
    public function preguntas(){
        return $this->hasMany(preguntas::class);
    }
}
