<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paises extends Model
{
    protected $fillable = ['paises', 'nombrePais'];
    use HasFactory;
    public function Departamentos(){
        return $this->hasMany(Departamentos::class);

    }
}
