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
        Schema::create('modulo_b', function (Blueprint $table) {
            $table->id();
            $table->string('email_empresa');
            $table->integer('no_profesionistas');
            $table->integer('funcion_prefil');
            $table->string('requisitos');
            $table->string('demanda_carreras');
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
        Schema::dropIfExists('modulo_b');
    }
};
