<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\Request;
use Faker\Generator as Faker;

$factory->define(Request::class, function (Faker $faker) {
    return [
        'titre' => $faker->sentence(4,true) ,
        'description' => $faker->sentence(6,true) ,
        'deadline'=> $faker->dateTime($max = 'now', $timezone = null),
        'user_id' => User::get('id')->random(),
        'timestamps'=> now()
    ];
});
