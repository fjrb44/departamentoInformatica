<?php

use Faker\Generator as Faker;

$factory->define(App\Horario::class, function (Faker $faker) {
    return [
        'modulo_id' => App\Modulo::all()->random()->id,
        'tramo_horario_id' => App\TramoHorario::all()->random()->id,
    ];
});
