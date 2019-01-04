<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUbicacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_ubicaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->string('calle_numero');
            $table->string('colonia');
            $table->string('codigo_postal');
            $table->string('alcaldia');
            $table->string('ciudad');
            $table->string('estado');
            $table->string('entre_calle');
            $table->string('y_calle');
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
        Schema::dropIfExists('tbl_ubicaciones');
    }
}
