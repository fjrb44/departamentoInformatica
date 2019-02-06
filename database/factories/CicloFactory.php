<?php

use Faker\Generator as Faker;

$factory->define(App\Ciclo::class, function (Faker $faker) {
    return [
        'nombre' => $faker->colorName,
        'siglas' => $faker->randomLetter,
        'competencias' => $faker->text,
    ];
});
