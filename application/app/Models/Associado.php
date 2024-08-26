<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Associado extends Model
{
    // Define o nome da tabela associada a esta model
    protected $table = 'associados';

    // Define os campos que podem ser preenchidos em massa (mass assignment)
    protected $fillable = [
        'nome',
        'data_afiliacao',
        'equipe',
        'rg',
        'cpf',
        'data_nascimento',
        'telefone',
        'email',
        'data_ultimo_pagamento',
    ];

    // Se a tabela não tiver as colunas created_at e updated_at
    public $timestamps = false;
}
