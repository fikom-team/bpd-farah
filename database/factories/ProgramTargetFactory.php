<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ProgramTarget;
use App\StrategicTarget;
use Faker\Generator as Faker;

$factory->define(ProgramTarget::class, function (Faker $faker) {
    return [
        'strategic_target_id' => fn () => factory(StrategicTarget::class)->create()->id,
        'name'                => $faker->realText(),
        'kode'                => 'SP-' . rand(2, 3),
    ];
});
