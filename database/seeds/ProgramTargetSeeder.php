<?php

use App\ProgramTarget;
use App\StrategicTarget;
use Illuminate\Database\Seeder;

class ProgramTargetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StrategicTarget::get()->each(function ($st) {
            factory(ProgramTarget::class , rand(3,4))->create([
                'strategic_target_id' => $st['id'],
            ]);
        });
    }
}
