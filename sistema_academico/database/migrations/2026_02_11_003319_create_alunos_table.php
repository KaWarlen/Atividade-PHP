<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('alunos', function (Blueprint $table) {
        $table->id();
        $table->string('nome');
        $table->string('email')->unique(); // Boa prática: email único
        
        // Chave Estrangeira: Um aluno pertence a um curso
        $table->foreignId('curso_id')
              ->constrained('cursos') // Nome da tabela pai
              ->onDelete('cascade');  // Se apagar o curso, apaga os alunos (opcional)
              
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alunos');
    }
};
