<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSindicatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sindicatos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nombre',255)->nullable();
            $table->string('tipo_actividad',255)->nullable();
            $table->string('cuit',255)->nullable();
            $table->string('legajo',255)->nullable();
            $table->date('fecha_constitucion')->nullable();
            $table->string('cuota_sindical',255)->nullable();
            $table->string('registro',255)->nullable();
            $table->string('registro_nro',255)->nullable();
            $table->string('resolucion',255)->nullable();
            $table->date('resolucion_fecha')->nullable();
            $table->string('resolucion_tipo',255)->nullable();
            $table->string('boletin_oficial',255)->nullable();
            $table->string('grado',255)->nullable();
            $table->string('estado',255)->nullable();
            $table->string('conciliaciones',255)->nullable();
            $table->string('legalizacion',255)->nullable();
            $table->string('telefono',255)->nullable();
            $table->string('email_principal',255)->nullable();
            $table->string('email_secundario',255)->nullable();
            $table->string('pagina_web',255)->nullable();
            $table->string('redes_sociales',255)->nullable();
            $table->string('otros_contactos',255)->nullable();
            $table->string('domicilio_real',255)->nullable();
            $table->string('domicilio_legal',255)->nullable();
            $table->string('provincia',255)->nullable();
            $table->string('localidad',255)->nullable();
            $table->string('obra_social',255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sindicatos');
    }
}
