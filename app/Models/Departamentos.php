<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamentos extends Model
{
    protected $fillable = ['idDepartamento', 'nombreDepartamento', 'idPais'];
    use HasFactory;

    public function Municipios(){
        return $this->hasMany(Municipios::class);


    }
    public function Paises(){
        return $this->belongsTo(Paises::class);

    }

}
