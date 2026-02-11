<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/usuarios',[PaginaController::class, 'usuarios'])->name('produto.usuarios');

Route::post('produtos', [ProdutoController::class, 'store']);

Route::get('/produtos/create', [ProdutoController::class, 'create']);


Route::get('/cursos', [CursoController::class, 'index']);

route::get('/cursos/lista', [CursoController::class, 'listagem']);

Route::get('/cursos/novo', [CursoController::class, 'create']);

Route::post('/cursos', [CursoController::class, 'store']);

Route::resource('alunos', AlunoController::class);

Route::get('/disciplinas', [DisciplinaController::class, 'index']);

Route::get('/disciplinas/nova', [DisciplinaController::class, 'create']);

Route::get('/disciplinas', [DisciplinaController::class, 'store']);

Route::get('/disciplinas/{id}', [DisciplinaController::class, 'show']);
