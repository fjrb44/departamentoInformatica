<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('miembros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('telefono')->nullable();
            $table->string('email')->unique();
            $table->string('url')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('codigo');
            $table->boolean('admin')->default(false);
            $table->boolean('jefe_dept')->default(false);;
            $table->boolean('mostrar_telefono')->default(false);;
            $table->boolean('mostrar_email')->default(false);;
            $table->boolean('mostrar_url')->default(false);;
            $table->string('foto')->default('');
            $table->rememberToken();
            $table->timestamps();

            $table->string('curso_id');
            $table->foreign('curso_id')->references('id')->on('cursos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('miembros');
    }
}
