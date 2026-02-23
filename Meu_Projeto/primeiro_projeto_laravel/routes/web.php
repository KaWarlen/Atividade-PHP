<?php

use App\Http\Controllers\PaginaController;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobre',[PaginaController::class, 'sobre']);

/*Route::get ('/produto/{id}/{cat?}', function($id, $cat=""){

return "O ID do produto é: ".$id."\n"."A categoria é: ".$cat;

});*/

// Att 1
Route::get('/ola', function(){
return "Ola, Laravel";
});
//Att 2
Route::get('/curso/ads', function(){

return "Curso de Análise e Desenvolvimento de Sistemas";
});
//Att 3
Route::get('/curso/web', function(){
return "Disciplina Programação Web I";
});
//Att 4
Route::get('/sobre', function(){
return view('sobre');
});
//Att 5
Route::get('/contato', function(){
return view('contato');
});
//Att 6
Route::get('/institucional/missao', function(){
return view('missao');
});

//Att 7
Route::get('/empresa', [PaginaController::class, 'empresa']);

//Att 8
Route::get('/servicos', [PaginaController::class, 'servicos']);

//Att 9
Route::get('blog', [PaginaController::class, 'blog']);

Route::get('portfolio', [PaginaController::class, 'portfolio']);

//Att 10
/*
Error
vendor\laravel\framework\src\Illuminate\Routing\ControllerDispatcher.php:46
Call to undefined method App\Http\Controllers\PaginaController::Equipe()
*/
Route::get('/equipe', [PaginaController::class, 'Equipe']);

//Att11
Route::get('/usuario/{nome}', function($nome){
   return "Usuario: ". $nome;
});
//Att12
Route::get('/produto/{id}', [PaginaController::class, 'produto']);