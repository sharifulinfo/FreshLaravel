<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Student;
use App\School;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name' 		=> $faker->name,
        'email' 	=> $faker->unique()->safeEmail,
        'dep'		=> $faker->domainWord,
        'age'		=> $faker->numberBetween($min = 20, $max = 50),
        'school_id'	=> factory(School::class)->create(),
        'status'	=> 'Active',
    ];
});
