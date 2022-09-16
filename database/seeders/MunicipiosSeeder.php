<?php

namespace Database\Seeders;

use App\Models\Municipios;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Municipios::create([
            'idMunicipios' => 1,
            'nombreMunicipio' => 'Pereira',
            'idDepartamento' => '1'
        ]);
        Municipios::create([
            'idMunicipios' => 2,
            'nombreMunicipio' => 'Dosquebradas',
            'idDepartamento' => '1'
        ]);
        Municipios::create([
            'idMunicipios' => 3,
            'nombreMunicipio' => 'La Virginia',
            'idDepartamento' => '1'
        ]);
        Municipios::create([
            'idMunicipios' => 4,
            'nombreMunicipio' => 'Medellin',
            'idDepartamento' => '2'
        ]);
    }
}
