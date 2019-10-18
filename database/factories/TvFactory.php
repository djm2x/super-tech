<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tv;
use Faker\Generator as Faker;

$factory->define(Tv::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'ref' => random_int(0, 100)
    ];
});
