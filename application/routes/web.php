<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssociadoController;

// Página inicial redireciona para a listagem de associados
Route::get('/', [AssociadoController::class, 'index'])->name('associados.index');

// Outras rotas
Route::get('/associado/novo', [AssociadoController::class, 'create'])->name('associados.create');
Route::post('/associado', [AssociadoController::class, 'store'])->name('associados.store');