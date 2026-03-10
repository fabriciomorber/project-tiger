<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id();
            $table->integer('idArtigo');
            $table->integer('idMembro')->nullable();
            $table->text('nome')->nullable();
            $table->string('email', 255)->nullable();
            $table->text('site')->nullable();
            $table->boolean('situacao');
            $table->text('comentario');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('comentarios');
    }
};