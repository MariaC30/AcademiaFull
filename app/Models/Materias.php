<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materias extends Model
{
    use HasFactory;
    public function Docente(){
        return $this->hasMany(Docente::class);

    }
    public function cursos_materias(){
        return $this->belongsToMany(Curso::class);
    }
}
