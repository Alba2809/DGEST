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
        Schema::create('formulario_empresa', function (Blueprint $table) {
            $table->id();
            $table->string('email_empresa');
            $table->bigInteger('modulo_a')->nullable();
            $table->bigInteger('modulo_b')->nullable();
            $table->bigInteger('modulo_c')->nullable();
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
        Schema::dropIfExists('formulario_empresa');
    }
};
