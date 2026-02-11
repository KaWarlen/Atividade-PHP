<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function usuarios (){
        $usuarios = ['Ana','Bruno', 'Carlos'];
        return view('usuarios', compact('usuarios'));
    }   
}
