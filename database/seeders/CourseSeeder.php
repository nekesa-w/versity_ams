<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            // Faculty of Arts
            [
                'course_name' => 'History',
                'faculty_id' => 1, // Faculty of Arts
                'role' => 'course',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_name' => 'Philosophy',
                'faculty_id' => 1,
                'role' => 'course',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Faculty of Science
            [
                'course_name' => 'Physics',
                'faculty_id' => 2, // Faculty of Science
                'role' => 'course',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_name' => 'Biology',
                'faculty_id' => 2,
                'role' => 'course',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Faculty of Engineering
            [
                'course_name' => 'Mechanical Engineering',
                'faculty_id' => 3, // Faculty of Engineering
                'role' => 'course',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_name' => 'Civil Engineering',
                'faculty_id' => 3,
                'role' => 'course',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
