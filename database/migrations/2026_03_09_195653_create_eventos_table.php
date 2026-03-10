<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->text('url')->nullable();
            $table->text('nome')->nullable();
            $table->string('keywords', 255)->nullable();
            $table->string('description', 255)->nullable();
            $table->boolean('situacao');
            $table->boolean('situacaoFeed');
            $table->integer('restricao')->nullable();
            $table->integer('restricaoEspecifica')->nullable();
            $table->date('dataEntrada');
            $table->integer('autor');
            $table->integer('mostrarAutor');
            $table->text('conteudo')->nullable();
            $table->timestamps();

            // $table->index(['conteudo', 'nome'], 'searchEventos');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};