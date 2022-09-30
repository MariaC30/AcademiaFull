<?php

namespace Tests\Unit;

use Tests\TestCase;

class CursoTest extends TestCase
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
    public function test_nuevo_curso(){
        $respuesta = $this->post('/cursos/create',[
            'nombre'=>'Matemáticas',
            'descripcion'=>'Mate basicas para dummies',
            'duracion'=>'50',
            'imagen'=>'public\storage\cursos\Dd3qfbKdxnvqKBWnXoab7WvfTz4RXupvn7al9y8I.jpg'
        ]);
        return $respuesta->assertRedirect('/');
    }
}
