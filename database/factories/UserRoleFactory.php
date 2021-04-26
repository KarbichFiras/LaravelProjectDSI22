<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\role;
use App\User;
use App\user_role;
use Faker\Generator as Faker;

$factory->define(user_role::class, function (Faker $faker) {
    return [
        'user_id' => User::get('id')->random(),
        'role_id' => role::get('id')->random(),
        'created_at' => now()
    ];
});
