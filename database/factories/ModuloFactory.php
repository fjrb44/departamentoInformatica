<?php

use Faker\Generator as Faker;

$factory->define(App\Modulo::class, function (Faker $faker) {
    return [
        'nombre' => $faker->colorName,
        'siglas' => $faker->randomLetter . $faker->randomLetter,
        'num_horas' => $faker->randomNumber(),
        'codigo' => $faker->postcode
    ];
});
