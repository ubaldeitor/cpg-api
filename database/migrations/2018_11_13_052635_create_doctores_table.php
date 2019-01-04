<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_doctores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->string('nombre');
            $table->integer('id_especialidad')->unsigned();
            $table->foreign('id_especialidad')->references('id')->on('tbl_especialidades')->onDelete('cascade');
            $table->string('url_foto');
            $table->longText('experiencia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('tbl_doctores');
    }
}
