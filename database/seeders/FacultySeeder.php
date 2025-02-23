<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faculties')->insert([
            [
                'faculty_name' => 'Faculty of Arts',
                'role' => 'faculty',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'faculty_name' => 'Faculty of Science',
                'role' => 'faculty',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'faculty_name' => 'Faculty of Engineering',
                'role' => 'faculty',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
