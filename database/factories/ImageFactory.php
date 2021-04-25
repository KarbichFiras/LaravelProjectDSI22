<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use App\Test;
use App\User;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    return [
        'path' =>$faker->imageUrl,
        'user_id' => User::get('id')->random(),
        'created_at' => now()
    ];
});
