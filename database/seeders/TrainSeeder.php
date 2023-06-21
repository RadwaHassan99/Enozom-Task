<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('trains')->insert([
            [
                'train_name' => 'Talgo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'train_name' => 'French',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'train_name' => 'Spain',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
