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
            $table->string('tipoDocumento');
            $table->integer('numeroDocumento');
            $table->string('documentoIdentidad');
            $table->string('paisExpedocumento');
            $table->string('departamentoExp');
            $table->string('municipioExp');
            $table->date('fechaExp');
            $table->string('nombres');
            $table->string('primerApellido');
            $table->string('segundoApellido');
            $table->string('genero');
            $table->date('fechaNacimiento');
            $table->string('paisNacimiento');
            $table->string('departamentoNacimiento');
            $table->string('municipioNacimiento');
            $table->string('estratoSocial');
            $table->integer('idCursos');
            $table->integer('idMunicipiosExp');
            $table->integer('idMunicipioNac');
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
