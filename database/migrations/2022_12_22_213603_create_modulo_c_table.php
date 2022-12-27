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
        Schema::create('modulo_c', function (Blueprint $table) {
            $table->id();
            $table->string('email_empresa');
            $table->integer('resolver_conflictos');
            $table->integer('ortografia');
            $table->integer('mejora_procesos');
            $table->integer('trabajo_equipo');
            $table->integer('administrar_tiempo');
            $table->integer('seguridad_personal');
            $table->integer('facilidad_palabra');
            $table->integer('gestion_proyectos');
            $table->integer('puntualidad');
            $table->integer('cumplimiento_normas');
            $table->integer('integracion_trabajo');
            $table->integer('innovacion');
            $table->integer('negociacion');
            $table->integer('analisis');
            $table->integer('liderazgo');
            $table->integer('adaptacion');
            $table->integer('otras');
            $table->integer('desempeño_laboral');
            $table->string('sugerencias_instituto');
            $table->string('comentarios_sugerencias');
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
        Schema::dropIfExists('modulo_c');
    }
};
