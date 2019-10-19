<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePerfil extends Migration
{
    public function up()
    {
        Schema::create('perfiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('direccion');
            $table->string('ciudad');
            $table->string('profesion');
            $table->string('web');
            $table->bigInteger('solicitante_id')->unsigned();
            $table->foreign('solicitante_id')->references('id')->on('solicitantes');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('perfiles');
    }
}
