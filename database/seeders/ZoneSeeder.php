<?php

namespace Database\Seeders;

use App\Models\Zones;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ZoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $zones = [
            ['zone_name' => 'A', 'number_of_ticket' => 100, 'stadium_id' =>1],
            ['zone_name' => 'B', 'number_of_ticket' => 100, 'stadium_id' =>1],
            ['zone_name' => 'C', 'number_of_ticket' => 100, 'stadium_id' =>1],
            ['zone_name' => 'D', 'number_of_ticket' => 100, 'stadium_id' =>1],
        ];
        foreach ($zones as $zone) {
            Zones::create($zone);
        }
    }
}
