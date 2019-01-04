<?php

use Faker\Generator as Faker;

$factory->define(App\Employee::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'birth' => $faker->date,
        'gender' => rand(0, 1),
        'adrress' => $faker->name,
        'email' => $faker->email,
        'phone' => $faker->randomDigit,
        'salary' => $faker->randomDigit,
        'position' => $faker->randomDigit,
        'note' => $faker->paragraph
    ];
});