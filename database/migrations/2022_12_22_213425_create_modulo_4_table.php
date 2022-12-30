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
        Schema::create('modulo_4', function (Blueprint $table) {
            $table->id();
            $table->string('no_control_egresado');
            $table->string('eficiencia');
            $table->string('formacion_academica');
            $table->string('utilidad_residencias');
            $table->string('campo');
            $table->string('titulacion');
            $table->string('experiencia_laboral');
            $table->string('competencia_laboral');
            $table->string('institucion_egreso');
            $table->string('conocimientos_idiomas');
            $table->string('referencias');
            $table->string('personalidad');
            $table->string('liderazgo');
            $table->string('otros')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modulo_4');
    }
};
