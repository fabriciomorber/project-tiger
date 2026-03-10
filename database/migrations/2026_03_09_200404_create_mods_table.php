<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mods', function (Blueprint $table) {
            $table->id();
            $table->boolean('modartigos');
            $table->boolean('modprodutos');
            $table->boolean('moddownloads');
            $table->boolean('modbanners');
            $table->boolean('modeventos');
            $table->boolean('modpacotes')->nullable();
            $table->boolean('modmenu')->nullable();
            $table->boolean('modslides')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mods');
    }
};