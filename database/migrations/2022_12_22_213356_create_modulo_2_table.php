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
            $table->id();
            $table->string('no_control_egresado');
            $table->string('calidad_docentes');
            $table->string('plan_estudios');
            $table->string('part_proyectos');
            $table->string('enfasis_investigacion');
            $table->string('satisfaccion_cond');
            $table->string('experiencia_residencia');
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
        Schema::dropIfExists('modulo_2');
    }
};
