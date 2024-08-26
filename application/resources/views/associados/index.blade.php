<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Associados</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Associados Cadastrados</h1>

        <!-- Mensagem de sucesso se houver -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Botão para adicionar novo associado -->
        <a href="{{ route('associados.create') }}" class="btn btn-primary mb-3">Cadastrar Novo Associado</a>

        <!-- Tabela de associados -->
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Data de Afiliação</th>
                    <th>Equipe</th>
                    <th>RG</th>
                    <th>CPF</th>
                    <th>Data de Nascimento</th>
                    <th>Telefone</th>
                    <th>E-mail</th>
                    <th>Data do Último Pagamento</th>
                </tr>
            </thead>
            <tbody>
                @forelse($associados as $associado)
                <tr>
                    <td>{{ $associado->id }}</td>
                    <td>{{ $associado->nome }}</td>
                    <td>{{ \Carbon\Carbon::parse($associado->data_afiliacao)->format('d/m/Y') }}</td>
                    <td>{{ $associado->equipe }}</td>
                    <td>{{ $associado->rg }}</td>
                    <td>{{ $associado->cpf }}</td>
                    <td>{{ \Carbon\Carbon::parse($associado->data_nascimento)->format('d/m/Y') }}</td>
                    <td>{{ $associado->telefone }}</td>
                    <td>{{ $associado->email }}</td>
                    <td>{{ \Carbon\Carbon::parse($associado->data_ultimo_pagamento)->format('d/m/Y') }}</td>
                </tr>
                @empty
                    <tr>
                        <td colspan="10" class="text-center">Nenhum associado encontrado.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <!-- Inclua o JS do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>