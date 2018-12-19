<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSindicatosParitariasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sindicatos_paritarias', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->unsignedInteger('sindicato_id');
            $table->foreign('sindicato_id')->references('id')->on('sindicatos');
            $table->string('rubro');
            $table->date('fecha');
            $table->string('detalle');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sindicatos_paritarias');
    }
}
