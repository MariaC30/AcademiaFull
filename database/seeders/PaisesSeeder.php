<?php

namespace Database\Seeders;

use App\Models\Paises;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Paises::create([
            'paises' => 1,
            'nombrePais' => 'COLOMBIA'
        ]);
        Paises::create([
            'paises' => 2,
            'nombrePais' => 'ESPAÑA'
        ]);
        Paises::create([
            'paises' => 3,
            'nombrePais' => 'VENEZUELA'
        ]);
    }
}
