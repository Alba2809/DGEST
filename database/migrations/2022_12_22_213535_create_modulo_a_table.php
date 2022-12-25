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
        Schema::create('modulo_a', function (Blueprint $table) {
            $table->string('email_empresa');
            $table->string('nombre');
            $table->string('domicilio');
            $table->string('ciudad');
            $table->string('municipio');
            $table->string('estado');
            $table->string('telefono');
            $table->integer('organismo');
            $table->integer('tamanio_empresa');
            $table->string('actividad_economica');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modulo_a');
    }
};
