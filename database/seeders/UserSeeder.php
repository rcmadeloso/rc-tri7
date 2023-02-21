<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \DB::table('users')->insert([
            [
                'username' => 'manager',
                'name' => 'Manager Tri7',
                'email' => 'manager@tri7.com',
                'password' => bcrypt('password'),
                'role' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'web_developer',
                'name' => 'Web Developer Tri7',
                'email' => 'web_developer@tri7.com',
                'password' => bcrypt('password'),
                'role' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'web_designer',
                'name' => 'Web Designer Tri7',
                'email' => 'web_designer@tri7.com',
                'password' => bcrypt('password'),
                'role' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
