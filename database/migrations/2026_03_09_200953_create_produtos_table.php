<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->text('url');
            $table->text('nome');
            $table->integer('categorias');
            $table->string('keywords',255)->nullable();
            $table->string('description',255)->nullable();
            $table->boolean('situacao');
            $table->boolean('situacaoFeed');
            $table->integer('restricao')->nullable();
            $table->integer('restricaoEspecifica')->nullable();
            $table->text('img')->nullable();
            $table->date('dataEntrada');
            $table->date('dataSaida')->nullable();
            $table->date('promocaoEntrada')->nullable();
            $table->date('promocaoSaida')->nullable();
            $table->decimal('valor',10,0)->nullable();
            $table->decimal('valorPromocao',10,0)->nullable();
            $table->integer('peso')->nullable();
            $table->integer('altura')->nullable();
            $table->integer('largura')->nullable();
            $table->integer('comprimento')->nullable();
            $table->boolean('destaque');
            $table->integer('autor');
            $table->integer('mostrarAutor');
            $table->text('conteudo')->nullable();
            $table->timestamps();

            // $table->index(['conteudo','nome'],'searchProdutos');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};