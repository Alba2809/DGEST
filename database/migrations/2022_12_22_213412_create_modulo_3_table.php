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
        Schema::create('modulo_3', function (Blueprint $table) {
            $table->id();
            $table->string('no_control_egresado');
            $table->integer('actividad');
            $table->string('estudia');
            $table->string('especialidad_inst');
            $table->integer('trabaja');
            $table->string('medio');
            $table->string('requisitos_contrato');
            $table->string('idiomas');
            $table->string('proporcion_idiomas');
            $table->integer('antiguedad');
            $table->integer('anio_egreso');
            $table->integer('salario_minimo');
            $table->integer('nivel_jerarquico');
            $table->string('condicion_trabajo');
            $table->integer('relacion_area');
            $table->integer('organismo');
            $table->string('giro');
            $table->string('razon_social');
            $table->string('domicilio');
            $table->string('ciudad');
            $table->string('municipio');
            $table->string('estado');
            $table->string('telefono');
            $table->string('fax');
            $table->string('email');
            $table->string('pagina_web');
            $table->string('jefe');
            $table->integer('sector_primario');
            $table->integer('sector_secundario');
            $table->integer('sector_terciario');
            $table->integer('tamanio_empresa');
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
        Schema::dropIfExists('modulo_3');
    }
};
