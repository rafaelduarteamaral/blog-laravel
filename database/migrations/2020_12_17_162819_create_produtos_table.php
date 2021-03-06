<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('produto');
            $table->string('imagem')->nullable();
            $table->string('imagem_2')->nullable();
            $table->string('imagem_3')->nullable();
            $table->string('imagem_4')->nullable();
            $table->string('imagem_5')->nullable();
            $table->longText('descricao');
            $table->integer('avaliacao')->nullable();
            $table->string('categoria');
            $table->longText('texto_prod');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
