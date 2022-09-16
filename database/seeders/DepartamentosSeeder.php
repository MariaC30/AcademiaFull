<?php

namespace Database\Seeders;

use App\Models\Departamentos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Departamentos::create([
            'idDepartamento' => 1,
            'nombreDepartamento' => 'Risaralda',
            'idPais' => '1'
        ]);
        Departamentos::create([
            'idDepartamento' => 2,
            'nombreDepa' => 'Antioquia',
            'idPais' => '1'
        ]);
        Departamentos::create([
            'idDepartamento' => 3,
            'nombreDepartamento' => 'Cundinamarca',
            'idPais' => '1'
        ]);
        Departamentos::create([
            'idDepartamento' => 4,
            'nombreDepartamento' => 'Aragua',
            'idPais' => '2'
        ]);
        Departamentos::create([
            'idDepartamento' => 5,
            'nombreDepartamento' => 'Sevilla',
            'idPais' => '2'
        ]);
        Departamentos::create([
            'idDepartamento' => 6,
            'nombreDepartamento' => 'Aragua',
            'idPais' => '3'
        ]);
        Departamentos::create([
            'idDepartamento' => 7,
            'nombreDepartamento' => 'Merida',
            'idPais' => '3'
        ]);
    }
}
