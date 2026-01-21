<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function sobre(){
        return view('sobre');
    }
    public function empresa(){
        return "Página da Empresa";
    }
    public function servicos(){
        return view('servicos');
    }
    public function blog(){
        return view('blog');
    }
    public function portfolio(){
        return view('portfolio');
    }
    public function equipe(){
        return view('equipe');
    }
    public function produto($id){
        return "Produto ID: ".$id;
    }
}
