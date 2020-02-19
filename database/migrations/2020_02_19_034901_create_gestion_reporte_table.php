<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGestionReporteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gestion_reporte', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('Tipo_de_reporte',45);

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
        Schema::dropIfExists('_gestion_reporte');
    }
}
