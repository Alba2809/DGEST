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
            $table->string('resolver_conflictos');
            $table->string('ortografia');
            $table->string('mejora_procesos');
            $table->string('trabajo_equipo');
            $table->string('administrar_tiempo');
            $table->string('seguridad_personal');
            $table->string('facilidad_palabra');
            $table->string('gestion_proyectos');
            $table->string('puntualidad');
            $table->string('cumplimiento_normas');
            $table->string('integracion_trabajo');
            $table->string('innovacion');
            $table->string('negociacion');
            $table->string('analisis');
            $table->string('liderazgo');
            $table->string('adaptacion');
            $table->string('otras')->nullable();
            $table->string('desempeño_laboral');
            $table->text('sugerencias_instituto')->nullable();
            $table->text('comentarios_sugerencias')->nullable();
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
