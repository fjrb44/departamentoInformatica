<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImpartesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('impartes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('miembro_id');
            $table->integer('modulo_id');
            $table->timestamps();

            $table->foreign('miembro_id')->references('id')->on('miembros');
            $table->foreign('modulo_id')->references('id')->on('modulos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('impartes');
    }
}
