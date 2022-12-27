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
            $table->integer('eficiencia');
            $table->integer('formacion_academica');
            $table->integer('utilidad_residencias');
            $table->integer('campo');
            $table->integer('titulacion');
            $table->integer('experiencia_laboral');
            $table->integer('competencia_laboral');
            $table->integer('institucion_egreso');
            $table->integer('conocimientos_idiomas');
            $table->integer('referencias');
            $table->integer('personalidad');
            $table->integer('liderazgo');
            $table->integer('otros');
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
