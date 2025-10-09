<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmesTable extends Migration
{
    public function up()
    {
        // Evita erro se a tabela já existir
        if (!Schema::hasTable('filmes')) {
            Schema::create('filmes', function (Blueprint $table) {
                $table->id();
                $table->string('titulo');
                $table->integer('ano');

                // Garante compatibilidade de tipo com as tabelas referenciadas
                $table->unsignedBigInteger('diretor_id');
                $table->unsignedBigInteger('produtora_id');

                // Cria as foreign keys manualmente (forma mais confiável)
                $table->foreign('diretor_id')
                      ->references('id')
                      ->on('diretores')
                      ->onDelete('cascade');

                $table->foreign('produtora_id')
                      ->references('id')
                      ->on('produtoras')
                      ->onDelete('cascade');

                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('filmes');
    }
}
