<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLicencia extends Migration
{
    public function up()
    {
        Schema::create('licencias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tipo_licencia',150);
            $table->integer('valor_licencia');
            $table->bigInteger('predio_id')->unsigned();
            $table->foreign('predio_id')->references('id')->on('predios');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('licencias');
    }
}
