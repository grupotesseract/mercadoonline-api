<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

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
            $table->bigInteger('id', true);
            $table->string('titulo');
            $table->string('subtitulo')->nullable();
            $table->decimal('preco', 6, 2);
            $table->bigInteger('ean')->nullable();
            $table->boolean('disponivel');
            $table->string('descricao')->nullable();
            $table->string('descricao_sem_acento')->nullable();
            $table->string('marca')->nullable();
            $table->bigInteger('ncm')->nullable();
            $table->string('foto')->nullable();
            $table->string('st')->nullable();
            $table->smallInteger('cfop')->nullable();
            $table->string('icms_trib')->nullable();
            $table->smallInteger('icms_cst')->nullable();
            $table->smallInteger('pis_cst')->nullable();
            $table->smallInteger('cofins_cst')->nullable();
            $table->smallInteger('cest')->nullable();
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
        Schema::drop('produtos');
    }
}
