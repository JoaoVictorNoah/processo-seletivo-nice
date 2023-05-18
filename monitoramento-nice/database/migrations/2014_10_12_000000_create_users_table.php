<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('idUsuario');
            $table->string('nomeUsuario');
            $table->string('senhaUsuario');
            $table->unsignedBigInteger('tokenable_id')->nullable();
  
    
            // Define a chave estrangeira
            $table->foreign('tokenable_id')->references('id')->on('personal_access_tokens')->onDelete('cascade');
        });
    
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

?>