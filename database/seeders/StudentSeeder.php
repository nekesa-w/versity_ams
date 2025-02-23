<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            [
                'national_passport_id' => 123456789,
                'first_name' => 'John',
                'middle_name' => 'Chris',
                'last_name' => 'Atieno',
                'gender' => 'Male',
                'date_of_birth' => '2000-05-15',
                'address' => '123 Main Street',
                'citizenship' => 'Kenya',
                'email' => 'johna@example.com',
                'phone' => 987654321,
                'intake' => 'Fall 2025',
                'course_id' => 1,
                'role' => 'student',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'national_passport_id' => 987654321,
                'first_name' => 'Jane',
                'middle_name' => 'Stella',
                'last_name' => 'Juma',
                'gender' => 'Female',
                'date_of_birth' => '2001-08-22',
                'address' => '456 Another St',
                'citizenship' => 'Kenya',
                'email' => 'janej@example.com',
                'phone' => 123456789,
                'intake' => 'Spring 2025',
                'course_id' => 2,
                'role' => 'student',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
