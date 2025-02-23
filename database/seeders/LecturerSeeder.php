<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LecturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lecturers')->insert([
            [
                'national_passport_id' => 123456789,
                'first_name' => 'John',
                'middle_name' => 'Adam',
                'last_name' => 'Wekesa',
                'gender' => 'Male',
                'date_of_birth' => '1985-06-15',
                'email' => 'johnw@example.com',
                'email_verified_at' => now(),
                'phone' => 1234567890,
                'faculty_id' => 1,
                'role' => 'lecturer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'national_passport_id' => 987654321,
                'first_name' => 'Jane',
                'middle_name' => 'Njeri',
                'last_name' => 'Wambui',
                'gender' => 'Female',
                'date_of_birth' => '1990-08-25',
                'email' => 'janew@example.com',
                'email_verified_at' => now(),
                'phone' => 9876543210,
                'faculty_id' => 2,
                'role' => 'lecturer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
