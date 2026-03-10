<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name'       => 'Admon',
                'email'      => 'admon@robotics.com',
                'password'   => Hash::make('Adm@2022'),
                'role'       => 'administrative',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'       => 'Tecmilenio',
                'email'      => 'tecmilenio@robotics.com',
                'password'   => Hash::make('Adm@2022'),
                'role'       => 'teacher',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'       => 'Student',
                'email'      => 'student@robotics.com',
                'password'   => Hash::make('Adm@2022'),
                'role'       => 'student',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
