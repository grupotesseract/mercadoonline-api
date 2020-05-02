<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePivoProdutosPedidoTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos_pedido', function (Blueprint $table) {
            $table->bigInteger('id', true);

            $table->integer('produto_id');
            $table->foreign('produto_id')->references('id')->on('produtos');

            $table->integer('pedido_id');
            $table->foreign('pedido_id')->references('id')->on('pedidos');

            $table->integer('quantidade')->default(1);
            $table->boolean('confirmado')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pedidos');
    }
}
