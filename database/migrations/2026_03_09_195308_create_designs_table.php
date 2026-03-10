<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('design', function (Blueprint $table) {
            $table->id();
            $table->string('colorText', 7)->nullable();
            $table->string('colorTitle', 7)->nullable();
            $table->string('colorSubtitle', 7)->nullable();
            $table->string('colorLink', 7)->nullable();
            $table->string('colorLinkhover', 7)->nullable();
            $table->string('colorMenu', 7)->nullable();
            $table->string('colorMenuhover', 7)->nullable();
            $table->boolean('boldMenu')->nullable();
            $table->boolean('boldMenuhover')->nullable();
            $table->boolean('boldTitle')->nullable();
            $table->boolean('boldSubtitle')->nullable();
            $table->boolean('boldText')->nullable();
            $table->integer('tamanhoText')->nullable();
            $table->integer('tamanhoTitle')->nullable();
            $table->integer('tamanhoSubtitle')->nullable();
            $table->integer('tamanhoMenu')->nullable();
            $table->integer('tipoText')->nullable();
            $table->integer('tipoTitle')->nullable();
            $table->integer('tipoSubtitle')->nullable();
            $table->integer('tipoMenu')->nullable();
            $table->integer('tamanhoSlide')->nullable();
            $table->integer('tamanhoGaleria')->nullable();
            $table->integer('tamanhoArtigos')->nullable();
            $table->integer('tipoMenuOrientacao')->nullable();
            $table->integer('tipoHome')->nullable();
            $table->integer('tipoInterna')->nullable();
            $table->integer('tipoDesign')->nullable();
            $table->integer('template')->nullable();
            $table->text('topoNewsletter')->nullable();
            $table->text('rodapeNewsletter')->nullable();
            $table->string('background', 7)->nullable();
            $table->text('topoFacebook')->nullable();
            $table->text('rodapeFacebook')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('design');
    }
};