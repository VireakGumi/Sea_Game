<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Stadiums;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Stadiums::factory(5)->create();
        $this->call(SportsSeeder::class);
        $this->call(ZoneSeeder::class);
    }
}
