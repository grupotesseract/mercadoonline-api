<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Configuracao;
use Faker\Generator as Faker;

$factory->define(Configuracao::class, function (Faker $faker) {

    return [
        'nome_loja' => $faker->word,
        'numero_whatsapp' => $faker->randomDigitNotNull,
        'link_logo' => $faker->word,
        'cor_principal' => $faker->word,
        'cor_secundaria' => $faker->word,
        'link_facebook' => $faker->word,
        'link_instagram' => $faker->word,
        'link_website' => $faker->word,
        'texto_rodape' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
