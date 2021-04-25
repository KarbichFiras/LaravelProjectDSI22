<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use App\Test;
use Faker\Generator as Faker;
use App\User;

$factory->define(Test::class, function (Faker $faker) {
    return [
        'titre' => $faker->sentence(4,true) ,
        'description' => $faker->sentence(6,true) ,
        //'prix' => $faker->randomFloat(4,0,9999),
        'prix' => 20,
        'created_at' => now(),
        'user_id' => User::get('id')->random(),
        'image_id' => Image::get('id')->random()
    ];
});
