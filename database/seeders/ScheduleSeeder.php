<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('schedules')->insert([
            [
                'trip_id' => 1,
                'station_id' => 1,
                'time' => '7:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'trip_id' => 1,
                'station_id' => 5,
                'time' => '9:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            [
                'trip_id' => 2,
                'station_id' => 1,
                'time' => '7:30',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'trip_id' => 2,
                'station_id' => 3,
                'time' => '8:30',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'trip_id' => 2,
                'station_id' => 4,
                'time' => '9:30',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'trip_id' => 2,
                'station_id' => 5,
                'time' => '10:30',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            [
                'trip_id' => 3,
                'station_id' => 1,
                'time' => '9:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'trip_id' => 3,
                'station_id' => 3,
                'time' => '10:15',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'trip_id' => 3,
                'station_id' => 5,
                'time' => '11:30',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            [
                'trip_id' => 4,
                'station_id' => 5,
                'time' => '7:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'trip_id' => 4,
                'station_id' => 1,
                'time' => '9:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'trip_id' => 5,
                'station_id' => 5,
                'time' => '6:30',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'trip_id' => 5,
                'station_id' => 4,
                'time' => '7:30',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'trip_id' => 5,
                'station_id' => 3,
                'time' => '8:30',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'trip_id' => 5,
                'station_id' => 2,
                'time' => '9:30',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'trip_id' => 5,
                'station_id' => 1,
                'time' => '10:30',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'trip_id' => 6,
                'station_id' => 5,
                'time' => '9:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'trip_id' => 6,
                'station_id' => 3,
                'time' => '10:15',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'trip_id' => 6,
                'station_id' => 1,
                'time' => '11:30',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
