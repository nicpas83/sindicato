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
            $table->string('nombre');
            $table->string('tipo_actividad');
            $table->string('cuit');
            $table->string('legajo')->nullable();
            $table->date('fecha_constitucion')->nullable();
            $table->string('cuota_sindical')->nullable();
            $table->string('empleador_tipo')->nullable();
            $table->string('registro')->nullable();
            $table->string('registro_nro')->nullable();
            $table->string('resolucion')->nullable();
            $table->date('resolucion_fecha')->nullable();
            $table->string('resolucion_tipo')->nullable();
            $table->string('boletin_oficial')->nullable();
            $table->string('grado')->nullable();
            $table->string('estado')->nullable();
            $table->string('conciliaciones')->nullable();
            $table->string('legalizacion')->nullable();
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
            $table->string('obra_social')->nullable();
            $table->string('dn_designante')->nullable();
            $table->string('dn_nombre')->nullable();
            $table->string('dn_cuit')->nullable();
            $table->string('dn_nro_doc')->nullable();
            $table->string('dn_sexo')->nullable();
            $table->string('dn_fecha_nac')->nullable();
            $table->string('dn_fecha_venc')->nullable();
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
