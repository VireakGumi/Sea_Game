<?php

namespace Database\Seeders;

use App\Models\Sport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SportsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $sports = [
            ['name' => 'Football'],
            ['name' => 'Volleyball'],
            ['name' => 'Running'],
            ['name' => 'Tennis'],
            ['name' => 'Ping Pong'],
            ['name' => 'Kun Khmer'],
            ['name' => 'Basketball'],
        ];
        foreach($sports as $sport){
            Sport::create($sport);
        }
    }
}
