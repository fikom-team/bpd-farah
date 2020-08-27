<?php

use App\Deputy;
use App\ProgramTarget;
use Illuminate\Database\Seeder;

class DeputySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProgramTarget::get()->each(fn ($p) => factory(Deputy::class, rand(1, 3))->create([
            'program_target_id' => $p['id']
        ]));
    }
}
