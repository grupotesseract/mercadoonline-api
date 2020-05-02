<?php

use Illuminate\Database\Seeder;

class PedidosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Pedido::class, 6)->create()->each(function ($pedido) {
            $idsProdutos = \App\Models\Produto::inRandomOrder()->limit(5)->pluck('id');
            $pedido->produtos()->sync($idsProdutos);
        });

    }
}
