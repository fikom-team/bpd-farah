<?php

use App\StrategicTarget;
use Illuminate\Database\Seeder;

class StrategicTargetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(StrategicTarget::class, rand(3,4))->create();
    }
}
