<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\School;
use Faker\Generator as Faker;

$factory->define(School::class, function (Faker $faker) {
    return [
        'name'	=> $faker->company,
        'phone'	=> $faker->PhoneNumber,
    ];
});
