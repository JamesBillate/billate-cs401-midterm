<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Schedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = Course::all();

        Schedule::factory(50)->make()->each(function ($schedule) use ($courses) {
            $schedule->course_id = $courses->random()->id;
            $schedule->save();
        });
    }
}
