<?php

use App\Ministry;
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
    }
}
