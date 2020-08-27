<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Deputy;
use App\ProgramTarget;
use Faker\Generator as Faker;

$factory->define(Deputy::class, function (Faker $faker) {
    return [
        'program_target_id' => fn () => factory(ProgramTarget::class)->create()->id,
        'kode_ikp'          => 'IKP-' . rand(3, 4),
        'name'              => $faker->realText(50),
        'desc'              => $faker->realText(100),
        'target'            => rand(60, 100),
    ];
});
