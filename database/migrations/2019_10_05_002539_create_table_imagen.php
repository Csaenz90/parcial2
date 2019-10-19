<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableImagen extends Migration
{

    public function up()
    {
        Schema::create('imagenes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('url');
            $table->morphs('imageable');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('imagenes');
    }
}
