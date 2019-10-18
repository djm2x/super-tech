<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Objet;
use Faker\Generator as Faker;

$factory->define(Objet::class, function (Faker $faker) {
    return [
        'name' => $faker->name(), //Str::random(10), //
        'imei' => $faker->realText(13),
        'model' => $faker->realText(13),
        'vin' => $faker->realText(13),
        'plateNumber' => $faker->realText(13),
        'device' => $faker->realText(13),
        'simNumber' => $faker->realText(13),
        'idManager' => random_int(1, 2),
        'active' => $faker->boolean(),
        'expireOn' => $faker->date(),
    ];
});
