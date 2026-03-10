<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('configuracoes', function (Blueprint $table) {
            $table->id();
            $table->text('logoPadrao')->nullable();
            $table->string('titulo', 255);
            $table->string('sufixo', 255);
            $table->boolean('situacao');
            $table->boolean('situacaoFeed');
            $table->string('keywords', 255)->nullable();
            $table->string('description', 255)->nullable();
            $table->string('emailSite', 255)->nullable();
            $table->text('favico')->nullable();
            $table->text('descricao')->nullable();
            $table->text('erro404')->nullable();
            $table->text('googleAnalytics')->nullable();
            $table->text('webmasterTools')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('configuracoes');
    }
};