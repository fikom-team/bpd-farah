<?php

use App\ActivityTarget;
use App\ProgramTarget;
use Illuminate\Database\Seeder;

class ActivityTargetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @author hanan
     */
    public function run()
    {
        ProgramTarget::get()->each(function ($p) {
            factory(ActivityTarget::class)->create([
                'program_target_id' => $p['id']
            ]);
        });
    }
}
