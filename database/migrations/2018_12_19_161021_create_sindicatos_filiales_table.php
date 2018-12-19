<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSindicatosFilialesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sindicatos_filiales', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->unsignedInteger('sindicato_id');
            $table->foreign('sindicato_id')->references('id')->on('sindicatos');
            $table->string('provincia');
            $table->string('localidad');
            $table->string('referente');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('email');
            $table->string('web');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sindicatos_filiales');
    }
}
