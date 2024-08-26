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
        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <!-- Botão para adicionar novo associado -->
        <a href="<?php echo e(route('associados.create')); ?>" class="btn btn-primary mb-3">Cadastrar Novo Associado</a>

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
                <?php $__empty_1 = true; $__currentLoopData = $associados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $associado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($associado->id); ?></td>
                    <td><?php echo e($associado->nome); ?></td>
                    <td><?php echo e(\Carbon\Carbon::parse($associado->data_afiliacao)->format('d/m/Y')); ?></td>
                    <td><?php echo e($associado->equipe); ?></td>
                    <td><?php echo e($associado->rg); ?></td>
                    <td><?php echo e($associado->cpf); ?></td>
                    <td><?php echo e(\Carbon\Carbon::parse($associado->data_nascimento)->format('d/m/Y')); ?></td>
                    <td><?php echo e($associado->telefone); ?></td>
                    <td><?php echo e($associado->email); ?></td>
                    <td><?php echo e(\Carbon\Carbon::parse($associado->data_ultimo_pagamento)->format('d/m/Y')); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="10" class="text-center">Nenhum associado encontrado.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <!-- Inclua o JS do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html><?php /**PATH /var/www/application/resources/views/associados/index.blade.php ENDPATH**/ ?>