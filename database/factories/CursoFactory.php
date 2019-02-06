<?php

use Faker\Generator as Faker;

$factory->define(App\Curso::class, function (Faker $faker) {
    return [
        'nombre' => $faker->colorname,
        'codigo' => $faker->postcode,
        'ciclo_id' => App\Ciclo::all()->random(),
    ];
});
