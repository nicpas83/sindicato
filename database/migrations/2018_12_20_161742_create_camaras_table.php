<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCamarasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camaras', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nombre');
            $table->string('cuit');
            $table->date('fecha_constitucion')->nullable();
            $table->string('tipo_actividad')->nullable();
            $table->string('telefono')->nullable();
            $table->string('email_principal')->nullable();
            $table->string('email_secundario')->nullable();
            $table->string('pagina_web')->nullable();
            $table->string('redes_sociales')->nullable();
            $table->string('otros_contactos')->nullable();
            $table->string('domicilio_real')->nullable();
            $table->string('domicilio_legal')->nullable();
            $table->string('provincia')->nullable();
            $table->string('localidad')->nullable();
            $table->string('convenios')->nullable();
            $table->string('q_asociados')->nullable();
            $table->string('fortalezas')->nullable();
            $table->string('debilidades')->nullable();
            $table->string('elecciones')->nullable();
            $table->string('mandato')->nullable();
            $table->string('vinculaciones_extranjera')->nullable();
            $table->string('vinculaciones_nacionales')->nullable();
            $table->string('indicador_representacion')->nullable();
            $table->string('mapa_rankeo')->nullable();
            $table->string('cupo_femenino')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('camaras');
    }
}
