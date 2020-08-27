<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\StrategicTarget;
use Faker\Generator as Faker;

$factory->define(StrategicTarget::class, function (Faker $faker) {
    return [
        'name' => $faker->realText(200),
    ];
});
