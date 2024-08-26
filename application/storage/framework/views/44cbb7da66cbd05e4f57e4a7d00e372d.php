<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Associado</title>
    <!-- Inclua o CSS do Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Cadastrar Associado</h1>

        <!-- Exibir mensagens de sucesso -->
        <?php if(session('success')): ?>
            <div class="alert alert-success mt-3">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <!-- Formulário de cadastro -->
        <form action="<?php echo e(route('associados.store')); ?>" method="POST" class="mt-3">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="nome">Nome do Associado</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>

            <div class="form-group">
                <label for="data_afiliacao">Data de Afiliação</label>
                <input type="date" class="form-control" id="data_afiliacao" name="data_afiliacao" required>
            </div>

            <div class="form-group">
                <label for="equipe">Equipe</label>
                <input type="text" class="form-control" id="equipe" name="equipe">
            </div>

            <div class="form-group">
                <label for="rg">RG</label>
                <input type="text" class="form-control" id="rg" name="rg">
            </div>

            <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf">
            </div>

            <div class="form-group">
                <label for="data_nascimento">Data de Nascimento</label>
                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento">
            </div>

            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone">
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="data_ultimo_pagamento">Data do Último Pagamento</label>
                <input type="date" class="form-control" id="data_ultimo_pagamento" name="data_ultimo_pagamento">
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>

    <!-- Inclua o JS do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html><?php /**PATH /var/www/application/resources/views/associados/create.blade.php ENDPATH**/ ?>