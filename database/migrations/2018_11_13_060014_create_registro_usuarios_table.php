<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistroUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_registro_usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('password');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->string('nombre');
            $table->string('codigo_postal');
            $table->boolean('send_news');
            $table->boolean('aviso_leido');
            $table->boolean('activo');
            
                        

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
        Schema::dropIfExists('tbl_registro_usuarios');
    }
}
