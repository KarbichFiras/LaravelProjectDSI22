<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\role;
use App\User;
use App\role_user;
use Faker\Generator as Faker;

$factory->define(role_user::class, function (Faker $faker) {
    return [
        'user_id' => User::all()->random()->id,
        'role_id' => role::all()->random()->id,
        'created_at' => now()
    ];
});
