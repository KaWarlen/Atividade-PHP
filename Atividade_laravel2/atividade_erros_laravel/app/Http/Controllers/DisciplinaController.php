<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    // Listar
    public function index()
    {
        // Simulando dados do banco
        $disciplinas = [
            ['id' => 1, 'nome' => 'Matemática Financeira'],
            ['id' => 2, 'nome' => 'Programação Web'],
            ['id' => 3, 'nome' => 'Banco de Dados']
        ];

        return view('disciplinas.index', ['disciplinas' => $disciplinas]);
    }

    // Mostrar Formulário
    public function create()
    {
        return view('disciplinas.create');
    }

    // Salvar (Simulado)
    public function store(Request $request)
    {
        $nome = $request->input('nome');
        return "Disciplina '{$nome}' cadastrada com sucesso!";
    }

    // Visualizar Detalhes
    public function show($id)
    {
        // Simulando busca no banco
        $nomeDisciplina = "Disciplina Genérica (ID: $id)"; 
        
        return view('disciplinas.show', [
            'id' => $id, 
            'nome' => $nomeDisciplina
        ]);
    }
}