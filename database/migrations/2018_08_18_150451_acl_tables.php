<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AclTables extends Migration {

    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up() {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->string('name')->unique();
            $table->string('description')->nullable();
        });

        Schema::create('rights', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->string('name')->unique();
            $table->string('description')->nullable();
        });

        Schema::create('permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->unsignedInteger('right_id');
            $table->string('controller');
            $table->string('action');
            $table->foreign('right_id')->references('id')->on('rights')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('roles_users', function (Blueprint $table) {
            $table->unsignedInteger('role_id');
            $table->unsignedInteger('user_id');
            $table->foreign('role_id')->references('id')->on('roles');
            $table->foreign('user_id')->references('id')->on('users');
            $table->primary(['role_id', 'user_id']);
        });

        Schema::create('roles_rights', function (Blueprint $table) {
            $table->unsignedInteger('role_id');
            $table->unsignedInteger('right_id');
            $table->foreign('role_id')->references('id')->on('roles');
            $table->foreign('right_id')->references('id')->on('rights');
            $table->primary(['role_id', 'right_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down() {
        Schema::dropIfExists('roles_users');
        Schema::dropIfExists('roles_rights');
        Schema::dropIfExists('permissions');
        Schema::dropIfExists('rights');
        Schema::dropIfExists('roles');
    }

}
