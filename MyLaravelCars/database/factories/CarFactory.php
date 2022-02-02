<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    return [
        'name' => $faker -> words(2, true),       
        'manufacture' => $faker -> words(3, true),
        'displacement' => $faker -> numberBetween(500, 1000)
    ];
});
