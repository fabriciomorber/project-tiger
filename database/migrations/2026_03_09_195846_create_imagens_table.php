<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('imagens', function (Blueprint $table) {
            $table->id();
            $table->text('arquivo');
            $table->string('legenda', 255)->nullable();
            $table->integer('slides')->nullable();
            $table->integer('galerias')->nullable();
            $table->integer('produtos')->nullable();
            $table->text('link')->nullable();
            $table->integer('ordem');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('imagens');
    }
};