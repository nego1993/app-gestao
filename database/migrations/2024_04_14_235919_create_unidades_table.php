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
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->string('unidade', 10);
            $table->string('descricao', 255)->nullable();
            $table->timestamps();
        });

        // relacionamento com tabela produto
        Schema::table('produtos', function (Blueprint $table) {
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades');
        });

        // relacionamento com tabela produto_detelhes
        Schema::table('produto_detalhes', function (Blueprint $table) {
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // remover relacionamento produto_detalhes

        Schema::table('produto_detalhes', function (Blueprint $table) {
            // remover a fk
            $table->dropForeign('produto_detalhes_unidade_id_foreign');
            // remover a unidade_id
            $table->dropColumn('unidade_id');
        });

        // remover relacionamento produto
        Schema::table('produtos', function (Blueprint $table) {
            // remover a fk
            $table->dropForeign('produtos_unidade_id_foreign');
            // remover a unidade_id
            $table->dropColumn('unidade_id');
        });

        Schema::dropIfExists('unidades');
    }
};
