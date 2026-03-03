<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function create() {
        return view('produtos.create');
    }

    public function store(Request $request) {
        // O $request->nome pega o valor do 'name' do input do formulário
        return "Produto cadastrado: " . $request->nome;
    }
}
