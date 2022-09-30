<?php

namespace Tests\Unit;

use App\Models\Docente;
use App\Models\User;
use Tests\TestCase;

class DocenteTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function test_docente_duplication(){
        $docente1 = Docente::make([
            'nombre' => 'Diana',
            'apellidos' => 'Cardozo'
        ]);
        $docente2 = Docente::make([
            'nombre' => 'Eliana',
            'apellidos' => 'Londoño'
        ]);

        $this->assertTrue(($docente1->nombre != $docente2->nombre) &&
        ($docente1->apellido != $docente2->apellido));
    }

    public function test_delete_docente(){
        $docente = Docente::factory()->count(1)->make();
        $docente = Docente::first();

        if($docente){
            $docente->delete();
        }
        $this->assertTrue(true);
    }
}

