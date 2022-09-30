<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiantes extends Model
{

    protected $fillable = ['nombres', 'FotoPerfil', 'genero'];
    use HasFactory;
    public function Curso(){
        return $this->hasMany(Curso::class);

    }
    public function Municipios(){
        return $this->belongsTo(Municipios::class);
    }

    public static function findEstudiante($Estudiante)
    {
        return static::where('Estudiante', $Estudiante)->first();
    }


}
