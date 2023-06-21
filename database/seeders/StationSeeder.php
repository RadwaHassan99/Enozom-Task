<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('stations')->insert([
            [
                'station_name' => 'Alexandria',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'station_name' => 'Damnhour',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'station_name' => 'Tanta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'station_name' => 'Banha',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'station_name' => 'Cairo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
