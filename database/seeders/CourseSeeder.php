<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Schedule;
use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teachers = Teacher::all();

        Course::factory(20)->create([
            'teacher_id' => $teachers->random()->id,
        ]);
    }
}
