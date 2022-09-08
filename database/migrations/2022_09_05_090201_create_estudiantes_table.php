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
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id('Estudiante');
            $table->timestamps();
            $table->text('tipoDocumento');
            $table->integer('numeroDocumento');
            $table->string('documentoIdentidad');
            $table->date('fechaExp');
            $table->unsignedBigInteger('idMunicipiosExp');
            $table->text('nombres');
            $table->text('primerApellido');
            $table->text('segundoApellido');
            $table->text('genero');
            $table->unsignedBigInteger('idMunicipioNac');
            $table->unsignedBigInteger('idCursos');
            $table->integer('estratoSocial');

            $table->foreign('idMunicipiosExp')->references('id')->on('municipios')->onDelete('cascade')->onUpdate('cascade');;
            $table->foreign('idMunicipioNac')->references('id')->on('municipios')->onDelete('cascade')->onUpdate('cascade');;
            $table->foreign('idCursos')->references('id')->on('cursos')->onDelete('cascade')->onUpdate('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiantes');
    }
};

