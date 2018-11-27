<?php

use Faker\Generator as Faker;

$factory->define(App\employees::class, function (Faker $faker) {
    return [
        'fname' => $faker->name,
        'lname' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'tel_no' => $faker->phoneNumber
    ];
});
