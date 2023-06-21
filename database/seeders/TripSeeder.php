<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('trips')->insert([
            [
                'id'=> 1,
                'train_id'=> 1
            ],
            [
                'id'=> 2,
                'train_id'=> 2
            ],
            [
                'id'=> 3,
                'train_id'=> 3
            ],
            [
                'id'=> 4,
                'train_id'=> 1
            ],
            [
                'id'=> 5,
                'train_id'=> 2
            ],
            [
                'id'=> 6,
                'train_id'=> 3
            ],
        ]);
    }
}
