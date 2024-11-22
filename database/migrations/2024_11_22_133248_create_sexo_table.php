<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSexoTable extends Migration
{
    public function up()
    {
        Schema::create('sexo', function (Blueprint $table) {
            $table->id('sexId'); // Primary key
            $table->string('sexNombre', 60);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sexo');
    }
}

