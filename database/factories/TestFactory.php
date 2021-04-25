<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Test;
use Faker\Generator as Faker;

$factory->define(Test::class, function (Faker $faker) {
    return [
        'titre' => $faker->sentence(6,true) ,
        'description' => $faker->paragraph ,
        'prix' => $faker->randomFloat(4,0,9999),
        'created_at' => now()
    ];
});
