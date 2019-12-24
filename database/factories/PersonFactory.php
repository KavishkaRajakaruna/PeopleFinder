<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\person;
use Faker\Generator as Faker;

$factory->define(person::class, function (Faker $faker) {
    return [
        'First_name'=> $faker->firstName,
        'last-name' => $faker ->lastName,
        'phone' => $faker -> phoneNumber,
        'city'=> $faker ->city,
    ];
});
