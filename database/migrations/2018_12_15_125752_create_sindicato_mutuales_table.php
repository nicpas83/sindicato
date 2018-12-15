<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSindicatoMutualesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('sindicato_mutuales', function (Blueprint $table) {
            $table->unsignedInteger('sindicato_id');
            $table->unsignedInteger('mutual_id');
            $table->foreign('sindicato_id')->references('id')->on('sindicatos');
            $table->foreign('mutual_id')->references('id')->on('mutuales');
            $table->primary(['sindicato_id', 'mutual_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('sindicato_mutuals');
    }

}
