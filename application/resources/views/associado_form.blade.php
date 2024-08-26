@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Cadastro de Associado</h2>
    <form action="{{ route('associados.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Associado</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>

        <div class="mb-3">
            <label for="data_afiliação" class="form-label">Data de Afiliação</label>
            <input type="date" class="form-control" id="data_afiliação" name="data_afiliação" required>
        </div>

        <div class="mb-3">
            <label for="equipe" class="form-label">Equipe</label>
            <input type="text" class="form-control" id="equipe" name="equipe" required>
        </div>

        <div class="mb-3">
            <label for="rg" class="form-label">RG</label>
            <input type="text" class="form-control" id="rg" name="rg" required>
        </div>

        <div class="mb-3">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf" required>
        </div>

        <div class="mb-3">
            <label for="data_nascimento" class="form-label">Data de Nascimento</label>
            <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
        </div>

        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="tel" class="form-control" id="telefone" name="telefone" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
            <label for="data_ultimo_pagamento" class="form-label">Data do Último Pagamento</label>
            <input type="date" class="form-control" id="data_ultimo_pagamento" name="data_ultimo_pagamento" required>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection
