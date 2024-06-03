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
        Schema::create('site_contatos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome', 255);
            $table->string('telefone', 255);
            $table->string('email', 255);
            $table->integer('motivo_contato');
            $table->longText('mensagem');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_contatos');
    }
};
