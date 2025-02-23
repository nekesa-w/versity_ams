<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('applications')->insert([
            [
                'fullname' => 'Chris Kaiga',
                'phone' => 1234567890,
                'email' => 'chrisk@example.com',
                'password' => Hash::make('password123'),
                'role' => 'applicant',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fullname' => 'Janet Mugo',
                'phone' => 9876543210,
                'email' => 'janetm@example.com',
                'password' => Hash::make('password123'),
                'role' => 'applicant',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
