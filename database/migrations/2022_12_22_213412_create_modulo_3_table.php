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
            $table->string('actividad')->nullable();
            $table->string('estudia')->nullable();
            $table->string('especialidad_inst')->nullable();
            $table->string('trabaja')->nullable();
            $table->string('medio')->nullable();
            $table->string('requisitos_contrato')->nullable();
            $table->string('idiomas')->nullable();
            $table->integer('hablar')->nullable();
            $table->integer('escribir')->nullable();
            $table->integer('leer')->nullable();
            $table->integer('escuchar')->nullable();
            $table->string('antiguedad')->nullable();
            $table->string('anio_egreso')->nullable();
            $table->string('salario_minimo')->nullable();
            $table->string('nivel_jerarquico')->nullable();
            $table->string('condicion_trabajo')->nullable();
            $table->string('relacion_area')->nullable();
            $table->string('organismo')->nullable();
            $table->string('giro')->nullable();
            $table->string('razon_social')->nullable();
            $table->string('domicilio')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('municipio')->nullable();
            $table->string('estado')->nullable();
            $table->string('telefono')->nullable();
            $table->string('fax')->nullable();
            $table->string('email')->nullable();
            $table->string('pagina_web')->nullable();
            $table->string('jefe')->nullable();
            $table->string('sector_primario')->nullable();
            $table->string('sector_secundario')->nullable();
            $table->string('sector_terciario')->nullable();
            $table->string('tamanio_empresa')->nullable();
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
