<?php

use App\Ministry;
use App\StrategicTarget;
use Illuminate\Database\Seeder;

class MinistrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StrategicTarget::get()->each(function ($st) {
            factory(Ministry::class , rand(3,4))->create([
                'strategic_target_id' => $st['id'],
            ]);
        });
    }
}
