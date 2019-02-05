<?php

use App\User;
use App\Modulo;
use Faker\Generator as Faker;

$factory->define(App\Imparte::class, function (Faker $faker) {
    return [
        'miembro_id' => User::all()->random()->id,
        'modulo_id' => Modulo::all()->random()->id,
    ];
});
