<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Titulo::class, function (Faker $faker) {
    return [
        'titulo' => $faker->sentence(10),
        'items' => $faker->paragraph($nbSentences = 5, $variableNbSentences = false)
    ];
});
