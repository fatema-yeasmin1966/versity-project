<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(StaticOptionSeeder::class);

        \App\Models\Specialist::factory(20)->create();
        \App\Models\Medicine::factory(40)->create();
        \App\Models\Schedule::factory(100)->create();
        \App\Models\User::factory(50)->create();
    }
}
