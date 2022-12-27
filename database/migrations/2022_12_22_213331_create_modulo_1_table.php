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
            $table->id();
            $table->string('no_control_egresado');
            $table->string('estado_civil');
            $table->string('domicilio');
            $table->string('ciudad');
            $table->string('municipio');
            $table->string('estado');
            $table->string('telefono');
            $table->string('tel_casa');
            $table->string('lenguaje_ext');
            $table->string('titulado');
            $table->string('manejo_paquetes');
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
        Schema::dropIfExists('modulo_1');
    }
};
