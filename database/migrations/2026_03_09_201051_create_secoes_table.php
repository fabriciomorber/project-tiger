<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('secoes', function (Blueprint $table) {
            $table->id();
            $table->text('nome');
            $table->boolean('situacao');
            $table->integer('restricao')->nullable();
            $table->text('restricaoEspecifica')->nullable();
            $table->text('descricao')->nullable();
            $table->string('hash', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('secoes');
    }
};