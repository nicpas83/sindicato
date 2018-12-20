<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCamarasDelegacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camaras_delegaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->unsignedInteger('camara_id');
            $table->foreign('camara_id')->references('id')->on('camaras');
            $table->string('provincia');
            $table->string('localidad');
            $table->string('presidente');
            $table->string('telefono');
            $table->string('fax');
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
        Schema::dropIfExists('camaras_delegaciones');
    }
}
