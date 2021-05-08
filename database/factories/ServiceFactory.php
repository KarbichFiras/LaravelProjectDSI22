<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\Model;
use App\Service;
use Faker\Generator as Faker;

$factory->define(Service::class, function (Faker $faker) {
    return [
        'titre' => $faker->sentence(4,true) ,
        'description' => $faker->sentence(6,true) ,
        'prix' => $faker->randomFloat(4,0,9999), 
        'created_at' => now(),
        'user_id' => User::get('id')->random()
    ];
});
