<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctoresUbicacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_doctores_ubicacion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_doctor')->unsigned();
            $table->foreign('id_doctor')->references('id')->on('tbl_doctores')->onDelete('cascade');
            $table->integer('id_ubicacion')->unsigned();
            $table->foreign('id_ubicacion')->references('id')->on('tbl_ubicaciones')->onDelete('cascade');
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
        Schema::dropIfExists('tbl_doctores_ubicacion');
    }
}
