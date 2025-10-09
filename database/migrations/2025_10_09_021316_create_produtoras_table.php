<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutorasTable extends Migration
{
    public function up()
    {
        Schema::create('produtoras', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('pais');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('produtoras');
    }
}