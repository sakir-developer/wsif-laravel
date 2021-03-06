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
        $this->call(FlagSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PageSeeder::class);
        $this->call(PageItemSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(PartnerSeeder::class);
        $this->call(StaticOptionSeeder::class);
    }
}
