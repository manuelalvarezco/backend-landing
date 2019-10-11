<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Image::class, function (Faker $faker) {
    return [
        'titulo' => $faker->sentence(4),
        'url' => $faker->imageUrl($width = 440, $height = 280),
        'url_enlace' => $faker->url(),
        'titulo_enlace' => $faker->sentence(6)
    ];
});
