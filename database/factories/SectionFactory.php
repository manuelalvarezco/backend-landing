<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Section::class, function (Faker $faker) {
    return [
        'titulo' => $faker->sentence(6)
    ];
});
