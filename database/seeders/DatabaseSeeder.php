<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            FacultySeeder::class,
            CourseSeeder::class,
            StudentSeeder::class,
            LecturerSeeder::class,
            StaffSeeder::class,
            AdminSeeder::class,
        ]);
    }
}
