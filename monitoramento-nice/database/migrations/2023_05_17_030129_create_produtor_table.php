<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // Código abaixo é o responsável para criar no banco de dados a tabela produtors.
    public function up(): void
    {
        Schema::create('produtors', function (Blueprint $table) {
            $table->id('idProdutor');
            $table->string('nomeProdutor');
            $table->string('cpfProdutor');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('produtor');
    }
};
?>