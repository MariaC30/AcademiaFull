<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    //Añado permisos para manipular campos de la tabla
    protected $fillable = ['nombre', 'descripcion', 'imagen', 'duración'];
    use HasFactory;
    public function Estudiantes(){
        return $this->hasMany(Estudiantes::class);

    }

}
