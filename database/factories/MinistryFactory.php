<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Ministry;
use App\StrategicTarget;
use Faker\Generator as Faker;

$factory->define(Ministry::class, function (Faker $faker) {
    return [
        'strategic_target_id' => function () {
            return factory(StrategicTarget::class)->create()->id;
        },
        'kode_iku'            => 'IKU-' . rand(2, 4),
        'name'                => $faker->realText(100),
        'target'              => rand(60, 100),
    ];
});
