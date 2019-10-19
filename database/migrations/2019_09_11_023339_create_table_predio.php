<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePredio extends Migration
{
    public function up()
    {
        Schema::create('predios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_predio',150);
            $table->string('direccion');
            $table->integer('cedula_cadastral');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('predios');
    }
}
