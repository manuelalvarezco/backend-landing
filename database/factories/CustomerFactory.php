<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Customer::class, function (Faker $faker) {
    return [
        'full_name' => $faker->name(),
        'email' => $faker->email(),
        'telefono' => $faker->phoneNumber
    ];
});
