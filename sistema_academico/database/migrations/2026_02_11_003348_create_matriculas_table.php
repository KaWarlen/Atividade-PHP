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
    Schema::create('matriculas', function (Blueprint $table) {
        $table->id();
        
        // Chave Estrangeira: Uma matrícula pertence a um aluno
        $table->foreignId('aluno_id')
              ->constrained('alunos') // Nome da tabela pai
              ->onDelete('cascade');
              
        $table->date('data_matricula'); // Tipo Date para datas
        $table->string('status');       // Ex: 'Ativa', 'Trancada'
        
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matriculas');
    }
};
