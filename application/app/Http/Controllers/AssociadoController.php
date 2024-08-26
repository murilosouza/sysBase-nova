<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Associado;

class AssociadoController extends Controller
{
    public function index()
    {
        $associados = Associado::all();
        return view('associados.index', compact('associados'));
    }

    public function create()
    {
        return view('associados.create'); // View para criar um novo associado
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'data_afiliacao' => 'nullable|date',
            'equipe' => 'nullable|string|max:255',
            'rg' => 'nullable|string|max:20',
            'cpf' => 'nullable|string|max:15',
            'data_nascimento' => 'nullable|date',
            'telefone' => 'nullable|string|max:15',
            'email' => 'required|email|max:255',
            'data_ultimo_pagamento' => 'nullable|date',
        ]);

        Associado::create($validatedData);

        return redirect()->route('associados.index')->with('success', 'Associado criado com sucesso.');
    }
}
