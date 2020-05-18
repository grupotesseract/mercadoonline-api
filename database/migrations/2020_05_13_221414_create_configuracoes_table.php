<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConfiguracoesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuracoes', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('nome_loja')->nullable();
            $table->integer('numero_whatsapp')->nullable();
            $table->string('link_logo')->nullable();
            $table->string('cor_principal')->nullable();
            $table->string('cor_secundaria')->nullable();
            $table->string('link_facebook')->nullable();
            $table->string('link_instagram')->nullable();
            $table->string('link_website')->nullable();
            $table->string('texto_rodape')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('configuracoes');
    }
}
