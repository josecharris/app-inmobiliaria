<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->bigInteger('idUsuario');
            $table->char('Nombre',45);
            $table->char('Apellido',45);
            $table->bigInteger('Documento');
            $table->bigInteger('Telefono');
            $table->char('Email',45);
            $table->char('Contraseña',45);

            $table->bigInteger('idTipo_Usuario')->unsigned()->nullable();
            $table->foreign('idTipo_Usuario')->references('idTipo_Usuario')->on('tipo_usuario');

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
        Schema::dropIfExists('usuario');
    }
}
