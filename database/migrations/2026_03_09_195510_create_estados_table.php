<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('estado', function (Blueprint $table) {
            $table->integer('ID')->unique();
            $table->string('nome', 30);
            $table->string('sigla', 3);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('estado');
    }
};