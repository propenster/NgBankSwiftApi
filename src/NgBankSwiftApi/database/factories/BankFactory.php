<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bank;
use Faker\Generator as Faker;

$factory->define(Bank::class, function (Faker $faker) {
    // return [
    //     'bank' => $faker->name(),
    //     'city' => $faker->city(),
    //     'branch' => $faker->city(),
    //     'swift_code' => $faker->text(10),
    //     'sort_code' => $faker->randomDigit(8)

    // ];
});
