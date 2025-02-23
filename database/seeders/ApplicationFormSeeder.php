<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ApplicationFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('application_forms')->insert([
            [
                'applicant_id' => 1,
                'national_passport_id' => 987654321,
                'first_name' => 'Chris',
                'middle_name' => null,
                'last_name' => 'Kaiga',
                'gender' => 'Male',
                'date_of_birth' => '1995-07-10',
                'address' => '1234 Nairobi, Kenya',
                'citizenship' => 'Kenyan',
                'email' => 'chrisk@example.com',
                'phone' => 1234567890,
                'intake' => 'Fall 2025',
                'course_id' => 1,
                'transcripts' => 'transcripts/chris_kaiga.pdf',
                'role' => 'applicant',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
