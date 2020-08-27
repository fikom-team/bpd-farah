<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = collect([
            ['name' => 'hanan', 'email' => 'hasyrawi@gmail.com'],
            ['name' => 'farah', 'email' => 'farah@gmail.com'],
        ]);
        
        $admin->each(function ($admin) {
            factory(User::class)->create([
                'name'   => $admin['name'],
                'email'  => $admin['email']
            ]);
        });
    }
}
