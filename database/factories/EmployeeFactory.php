<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, static function (Faker $faker) {
    return [
        'type' => $faker->randomElement(['respondent', 'manager', 'director']),
    ];
});
