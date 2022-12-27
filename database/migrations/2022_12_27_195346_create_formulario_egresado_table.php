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
        Schema::create('formulario_egresado', function (Blueprint $table) {
            $table->id();
            $table->string('no_control_egresado');
            $table->bigInteger('modulo_1')->nullable();
            $table->bigInteger('modulo_2')->nullable();
            $table->bigInteger('modulo_3')->nullable();
            $table->bigInteger('modulo_4')->nullable();
            $table->bigInteger('modulo_5')->nullable();
            $table->bigInteger('modulo_6')->nullable();
            $table->bigInteger('modulo_7')->nullable();
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
        Schema::dropIfExists('formulario_egresado');
    }
};
