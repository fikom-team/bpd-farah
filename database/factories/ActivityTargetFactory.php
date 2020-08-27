<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ActivityTarget;
use Faker\Generator as Faker;

$factory->define(ActivityTarget::class, function (Faker $faker) {
    return [
        'program_target_id' => fn () => factory(ProgramTarget::class)->create()->id,
        'kode_sk'           => 'SK-' . rand(3, 4),
        'name'              => $faker->realText(50),
    ];
});
