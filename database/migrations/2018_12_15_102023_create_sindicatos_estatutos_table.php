<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSindicatosEstatutosTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('sindicatos_estatutos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->unsignedInteger('sindicato_id');
            $table->foreign('sindicato_id')->references('id')->on('sindicatos');
            $table->string('resolucion', 255);
            $table->date('fecha');
            $table->string('tipo', 255)->nullable();
            $table->string('publicacion', 255)->nullable();
            $table->string('actualizacion', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('sindicatos_estatutos');
    }

}
