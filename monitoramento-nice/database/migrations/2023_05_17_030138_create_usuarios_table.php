<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // Código abaixo é o responsável para criar no banco de dados a tabela usuario.
    public function up(): void
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->id('idUsuario');
            $table->string('nomeUsuario');
            $table->string('senhaUsuario');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('usuario');
    }
};
