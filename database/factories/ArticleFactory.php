<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
$factory->define(Article::class, function (Faker $faker) {
    return [
        'reference' => $faker->sentence(1), //Str::random(10), //
        'designation' => $faker->realText(13),
        'qteE' => random_int(100, 1000),
        'prixA' => random_int(10, 100),
        'prixV' => random_int(50, 200),
        'stockIntial' => random_int(1000, 10000),
        'stockFinal' => random_int(1000, 10000),
    ];
});
