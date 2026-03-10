<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->text('nome');
            $table->text('img');
            $table->text('link')->nullable();
            $table->boolean('situacao');
            $table->integer('autor');
            $table->timestamps();

            // $table->index(['img', 'nome', 'link'], 'searchBanners');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};