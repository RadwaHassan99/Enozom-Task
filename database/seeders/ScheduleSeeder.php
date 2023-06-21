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
                'train_id' => 1,
                'station_id' => 1,
                'time' => '7:00',
                'trip_number'=> 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'train_id' => 1,
                'station_id' => 5,
                'time' => '9:00',
                'trip_number'=> 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'train_id' => 2,
                'station_id' => 1,
                'time' => '7:30',
                'trip_number'=> 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'train_id' => 2,
                'station_id' => 3,
                'time' => '8:30',
                'trip_number'=> 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'train_id' => 2,
                'station_id' => 4,
                'trip_number'=> 2,
                'time' => '9:30',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'train_id' => 2,
                'station_id' => 5,
                'trip_number'=> 2,
                'time' => '10:30',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'train_id' => 3,
                'station_id' => 1,
                'time' => '9:00',
                'trip_number'=> 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'train_id' => 3,
                'station_id' => 3,
                'time' => '10:15',
                'trip_number'=> 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'train_id' => 3,
                'station_id' => 5,
                'time' => '11:30',
                'trip_number'=> 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],


            [
                'train_id' => 1,
                'station_id' => 5,
                'time' => '7:00',
                'trip_number'=> 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'train_id' => 1,
                'station_id' => 5,
                'time' => '9:00',
                'trip_number'=> 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'train_id' => 2,
                'station_id' => 5,
                'time' => '6:30',
                'trip_number'=> 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'train_id' => 2,
                'station_id' => 4,
                'time' => '7:30',
                'trip_number'=> 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'train_id' => 2,
                'station_id' => 3,
                'time' => '8:30',
                'trip_number'=> 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'train_id' => 2,
                'station_id' => 2,
                'trip_number'=> 5,
                'time' => '9:30',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'train_id' => 2,
                'station_id' => 5,
                'time' => '10:30',
                'trip_number'=> 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'train_id' => 3,
                'station_id' => 5,
                'time' => '9:00',
                'trip_number'=> 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'train_id' => 3,
                'station_id' => 3,
                'time' => '10:15',
                'trip_number'=> 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'train_id' => 3,
                'station_id' => 5,
                'time' => '11:30',
                'trip_number'=> 6,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
