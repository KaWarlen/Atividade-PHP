<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ProdutosController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/cursos', [CursoController::class, 'index']);

Route::get('/cursos/novo', [CursoController::class, 'create']);

Route::get('/cursos/lista', [CursoController::class, 'listagem']);

Route::get('/cursos/{id}', [CursoController::class, 'show']);

Route::get('/produtos/create', [ProdutoController::class, 'create']);

Route::post('/produtos', [ProdutoController::class, 'store']);


Route::get('/produtos/create', [ProdutosController::class, 'create']);
Route::post('/produtos', [ProdutosController::class, 'store']);