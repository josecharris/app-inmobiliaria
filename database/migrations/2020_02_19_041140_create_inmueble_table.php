<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInmuebleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inmueble', function (Blueprint $table) {
            $table->bigInteger('idInmueble');
            $table->char('Direccion',45);
            $table->char('Area',45);
            $table->char('Tipo',45);
            $table->bigInteger('Precio');
            $table->bigInteger('Telefono');
            $table->char('Descripcion',200);
            $table->binary('Imagenes');

            $table->bigInteger('idUsuario')->unsigned()->nullable();
            $table->foreign('idUsuario')->references('idUsuario')->on('usuario');

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
        Schema::dropIfExists('inmueble');
    }
}
