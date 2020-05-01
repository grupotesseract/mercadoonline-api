<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Produto;
use Faker\Generator as Faker;

$factory->define(Produto::class, function (Faker $faker) {

    return [
        'titulo' => $faker->word,
        'subtitulo' => $faker->word,
        'preco' => $faker->randomFloat(2, 1, 1000),
        'ean' => $faker->randomNumber(3),
        'disponivel' => $faker->boolean,
        'descricao' => $faker->text,
        'descricao_sem_acento' => $faker->text,
        'marca' => $faker->word,
        'ncm' => $faker->randomNumber(7),
        'foto' => $faker->imageUrl(180, 180),
        'st' => $faker->word,
        'cfop' => $faker->randomNumber(3),
        'icms_trib' => $faker->word,
        'icms_cst' => $faker->randomNumber(4),
        'pis_cst' => $faker->randomNumber(4),
        'cofins_cst' => $faker->randomNumber(4),
        'cest' => $faker->randomNumber(4),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
