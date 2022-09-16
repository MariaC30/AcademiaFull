<?php

namespace Database\Seeders;

use App\Models\Materias;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Materias::create([
            'materia'=> '1',
            'nombreMateria' => 'Correr 2',
            'intendiadHoraria'=> '80'
        ]);
    }
}
