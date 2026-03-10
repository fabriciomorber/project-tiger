<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('links', function (Blueprint $table) {
            $table->id();
            $table->text('nome');
            $table->boolean('situacao');
            $table->integer('tipo');
            $table->integer('pai')->nullable();
            $table->text('link')->nullable();
            $table->integer('menu')->nullable();
            $table->integer('ordem')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('links');
    }
};