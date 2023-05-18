<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // Código abaixo é o responsável para criar no banco de dados a tabela propriedades.
    public function up(): void
    {
        Schema::create('propriedades', function (Blueprint $table) {
            $table->id('idPropriedade');
            $table->string('nomePropriedade');
            $table->string('cadastroRural');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('propriedade');
    }
};
?>