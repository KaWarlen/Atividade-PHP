<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    // GET - Exibir formulário
    public function create()
    {
        return view('produtos.create');
    }

    // POST - Receber dados do formulário
    public function store(Request $request)
    {
        $nome = $request->input('nome');

        return "Produto recebido: " . $nome;
    }
}