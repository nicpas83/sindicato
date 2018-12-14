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
            $table->string('nombre',255);
            $table->string('tipo_actividad',255);
            $table->string('cuit',255);
            $table->string('legajo',255);
            $table->date('fecha_constitucion');
            $table->string('cuota_sindical',255);
            $table->string('registro',255);
            $table->string('registro_nro',255);
            $table->string('resolucion',255);
            $table->date('resolucion_fecha');
            $table->string('resolucion_tipo',255);
            $table->string('boletin_oficial',255);
            $table->string('grado',255);
            $table->string('estado',255);
            $table->string('conciliaciones',255);
            $table->string('legalizacion',255);
            $table->string('telefono',255);
            $table->string('email_principal',255);
            $table->string('email_secundario',255);
            $table->string('pagina_web',255);
            $table->string('redes_sociales',255);
            $table->string('otros_contactos',255);
            $table->string('domicilio_real',255);
            $table->string('domicilio_legal',255);
            $table->string('provincia',255);
            $table->string('localidad',255);
            $table->string('obra_social',255);
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
