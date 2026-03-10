<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tiposCampo', function (Blueprint $table) {
            $table->id();
            $table->text('nome')->nullable();
            $table->integer('modulo')->nullable();
            $table->text('codigo')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tiposCampo');
    }
};