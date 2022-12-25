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
        Schema::create('modulo_1', function (Blueprint $table) {
            $table->string('no_control_egresado');
            $table->integer('estado_civil');
            $table->string('domicilio');
            $table->string('ciudad');
            $table->string('municipio');
            $table->string('estado');
            $table->string('telefono');
            $table->string('tel_casa');
            $table->string('lenguaje_ext');
            $table->integer('titulado');
            $table->string('manejo_paquetes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modulo_1');
    }
};
