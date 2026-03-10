<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('paginas', function (Blueprint $table) {
            $table->id();
            $table->text('url');
            $table->text('nome')->nullable();
            $table->string('botao', 255)->nullable();
            $table->boolean('situacaoMenu')->nullable();
            $table->string('keywords', 255)->nullable();
            $table->string('description', 255)->nullable();
            $table->boolean('situacao');
            $table->boolean('situacaoFeed');
            $table->integer('restricao')->nullable();
            $table->integer('restricaoEspecifica')->nullable();
            $table->integer('tipo');
            $table->text('linkExterno')->nullable();
            $table->string('email', 255)->nullable();
            $table->integer('galeria')->nullable();
            $table->integer('galeriaLimit')->nullable();
            $table->integer('ordem');
            $table->integer('autor');
            $table->integer('mostrarAutor');
            $table->text('conteudo')->nullable();
            $table->timestamps();

            // $table->index(['conteudo', 'nome'], 'searchPaginas');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('paginas');
    }
};