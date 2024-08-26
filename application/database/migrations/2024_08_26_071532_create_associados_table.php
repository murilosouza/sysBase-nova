<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('associados', function (Blueprint $table) {
            $table->id(); // Cria uma coluna 'id' que é auto-incrementável
            $table->string('nome');
            $table->date('data_afiliacao')->nullable(); // Permitir valores nulos
            $table->string('equipe')->nullable();
            $table->string('rg')->nullable();
            $table->string('cpf')->nullable();
            $table->date('data_nascimento')->nullable();
            $table->string('telefone')->nullable();
            $table->string('email');
            $table->date('data_ultimo_pagamento')->nullable();
            $table->timestamps(); // Adiciona as colunas created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('associados');
    }
};
