<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('campos', function (Blueprint $table) {
            $table->id();
            $table->text('nome');
            $table->string('idCampo', 255)->nullable();
            $table->boolean('situacaoTitulo');
            $table->boolean('situacao');
            $table->integer('restricao');
            $table->text('restricaoEspecifica')->nullable();
            $table->integer('tipo');
            $table->integer('pagina')->nullable();
            $table->integer('noticias')->nullable();
            $table->integer('noticiasLimit')->nullable();
            $table->integer('artigos')->nullable();
            $table->integer('artigosLimit')->nullable();
            $table->integer('produtos')->nullable();
            $table->integer('produtosLimit')->nullable();
            $table->integer('pacotes')->nullable();
            $table->integer('pacotesLimit')->nullable();
            $table->integer('slides')->nullable();
            $table->integer('slidesLimit')->nullable();
            $table->integer('download')->nullable();
            $table->integer('categorias')->nullable();
            $table->integer('categoriasLimit')->nullable();
            $table->integer('galeria')->nullable();
            $table->integer('galeriaLimit')->nullable();
            $table->integer('menus')->nullable();
            $table->integer('membros')->nullable();
            $table->integer('membrosLimit')->nullable();
            $table->integer('secao');
            $table->integer('ordem');
            $table->text('conteudo')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('campos');
    }
};