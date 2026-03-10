<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoboticsKitSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('robotics_kits')->insert([
            ['name' => 'StarterKit',       'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Educational Robo', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kit5',             'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
