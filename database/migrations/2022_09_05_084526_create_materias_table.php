<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->id('materia');
            $table->timestamps();
            $table->string('nombreMateria');
            $table->unsignedBigInteger('intensidadHoraria');
            $table->unsignedBigInteger('id_Estudiante');

            $table->foreign('id_Estudiante')->references('Estudiante')->on('estudiantes')->onDelete('cascade')->onUpdate('cascade');;

        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materias');
    }
};
