<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('membros', function (Blueprint $table) {
            $table->id();
            $table->text('url');
            $table->text('nome');
            $table->text('sobrenome');
            $table->string('usuario', 20)->unique();
            $table->string('pass', 30);
            $table->integer('nivel');
            $table->boolean('situacao');
            $table->string('email', 255);
            $table->string('telefone', 20)->nullable();
            $table->string('celular', 20)->nullable();
            $table->text('site')->nullable();
            $table->string('twitter', 100)->nullable();
            $table->string('facebook', 255)->nullable();
            $table->text('endereco')->nullable();
            $table->integer('numeroEndereco')->nullable();
            $table->integer('estado');
            $table->integer('cidade');
            $table->date('dataNascimento');
            $table->text('descricao')->nullable();
            $table->boolean('aceitaNewsletter');
            $table->timestamps();

            /* $table->index(
                ['sobrenome', 'usuario', 'nome', 'descricao'],
                'searchMembros'
            ); */
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('membros');
    }
};