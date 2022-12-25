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
        Schema::create('egresados', function (Blueprint $table) {
            $table->string('no_control_egresado');
            $table->string('nombre');
            $table->string('email');
            $table->date('fecha_nac');
            $table->string('curp');
            $table->integer('sexo');
            $table->string('carrera');
            $table->string('especialidad');
            $table->string('mes_egreso');
            $table->string('anio_egreso');
            $table->integer('form_hecho');
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
        Schema::dropIfExists('egresados');
    }
};
