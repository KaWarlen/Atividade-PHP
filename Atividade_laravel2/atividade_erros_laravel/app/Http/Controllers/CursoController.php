<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return 'lista de cursos';
    }

    public function create(){
        return view('cursos.create');
    }
    public function listagem(){
        $cursos = ['ADS', 'Zootecnia', 'Direito'];
        return view('cursos.listagem', compact('cursos'));
    }
    public function show($id){
        return "Curso Slecionado: ID$id";
    }

    public function store (Request $request){
        $nomeCurso = $request->input('nome');
        return "Curso Cadastrado: $nomeCurso";
    }
}
