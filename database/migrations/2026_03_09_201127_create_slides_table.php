<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('slides', function (Blueprint $table) {
            $table->id();
            $table->text('nome');
            $table->integer('tipo');
            $table->integer('tamanho');
            $table->boolean('situacao');
            $table->integer('duracao')->nullable();
            $table->integer('duracaoEfeito')->nullable();
            $table->boolean('navegacaoSeta')->nullable();
            $table->boolean('navegacaoPager')->nullable();
            $table->integer('autor');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('slides');
    }
};