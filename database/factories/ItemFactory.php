<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Item::class, function (Faker $faker) {
    return [
        'contenido' => $faker->sentence(10),
        'section_id' => rand(1,2)
    ];
});
