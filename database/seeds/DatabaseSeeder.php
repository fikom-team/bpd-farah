<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(StrategicTargetSeeder::class);
        $this->call(MinistrySeeder::class);
        $this->call(ProgramTargetSeeder::class);
        $this->call(DeputySeeder::class);
        $this->call(ActivityTargetSeeder::class);
    }
}
