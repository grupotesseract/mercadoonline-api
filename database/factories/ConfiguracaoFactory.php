<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Configuracao;
use Faker\Generator as Faker;

$factory->define(Configuracao::class, function (Faker $faker) {

    return [
        'nome_loja' => $faker->company,
        'numero_whatsapp' => $faker->randomNumber(7),
        'link_logo' => 'https://via.placeholder.com/300x150',
        'cor_principal' => $faker->hexColor,
        'cor_secundaria' => $faker->hexColor,
        'link_facebook' => $faker->url,
        'link_instagram' => $faker->url,
        'link_website' => $faker->url,
        'texto_rodape' => $faker->sentence,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
