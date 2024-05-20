<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tema extends Model
{
    use HasFactory;
    protected $fillable=['titulo',
    'descripcion',
    ];

    public function quiz(){
        return $this->belongsTo(quiz:: class);
    }
    public function curso(){
        return $this->belongsTo(Curso:: class);
    }
}
