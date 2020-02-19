<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGestionVisitaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gestion_visita', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('Fecha');
            $table->time('hora');
            $table->char('Lugar',45);
            $table->char('Descripcion',120);
            $table->char('Nombre_Cliente',60);
            $table->integer('Telefono');

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
        Schema::dropIfExists('_gestion_visita');
    }
}
