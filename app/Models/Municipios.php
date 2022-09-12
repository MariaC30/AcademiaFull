<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipios extends Model
{
    use HasFactory;

    public function Estudiantes(){
        return $this->hasMany(Estudiantes::class);
    }
    public function Departamentos(){
        return $this->belongsTo(Departamentos::class);

    }
}
