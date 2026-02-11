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
    Schema::create('colaborador_projeto', function (Blueprint $table) {
        $table->id();

        // FK Projeto
        $table->foreignId('projeto_id')
              ->constrained('projetos')
              ->onDelete('cascade');

        // FK Colaborador
        $table->foreignId('colaborador_id')
              ->constrained('colaboradores')
              ->onDelete('cascade');
        
        // Atributos extras da relação (da atividade anterior)
        $table->string('funcao')->nullable();
        $table->date('data_entrada')->nullable();

        $table->timestamps();

        // --- A REGRA DE OURO (UNICIDADE) ---
        // Cria uma chave única composta. 
        // Impede que o Colaborador 1 entre no Projeto 5 duas vezes.
        $table->unique(['projeto_id', 'colaborador_id']); 
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
