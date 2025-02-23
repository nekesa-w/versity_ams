<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staff')->insert([
            [
                'national_passport_id' => 123456789,
                'first_name' => 'Alice',
                'middle_name' => 'Jones',
                'last_name' => 'Kamau',
                'gender' => 'Female',
                'date_of_birth' => '1985-04-10',
                'email' => 'alicek@example.com',
                'email_verified_at' => now(),
                'phone' => 987654321,
                'department_id' => 1,
                'role' => 'staff',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'national_passport_id' => 987654321,
                'first_name' => 'Michael',
                'middle_name' => 'Chris',
                'last_name' => 'Kuria',
                'gender' => 'Male',
                'date_of_birth' => '1990-07-20',
                'email' => 'michaelk@example.com',
                'email_verified_at' => now(),
                'phone' => 123456789,
                'department_id' => 2,
                'role' => 'staff',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
