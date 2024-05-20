<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subtema extends Model
{
    use HasFactory;
    protected $fillable=['titulo','descripcion','idTema'];

    public function tema(){
        return $this->belongdTo(tema:: class, 'idCurso');
    }
    public function actividad(){
        return $this->hasMany(Actividad::class);
    }
}
