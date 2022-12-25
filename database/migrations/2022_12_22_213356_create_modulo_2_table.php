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
        Schema::create('modulo_2', function (Blueprint $table) {
            $table->string('no_control_egresado');
            $table->integer('calidad_docentes');
            $table->integer('plan_estudios');
            $table->integer('part_proyectos');
            $table->integer('enfasis_investigacion');
            $table->integer('satisfaccion_cond');
            $table->integer('experiencia_residencia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modulo_2');
    }
};
