<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\Demande_devaluation;
use App\Test;
use Faker\Generator as Faker;

$factory->define(Demande_devaluation::class, function (Faker $faker) {
    return [
        'user_id' => User::get('id')->random(),
        'test_id' => Test::get('id')->random(),
        'created_at' => now()
    ];
});
