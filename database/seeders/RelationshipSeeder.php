<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Role;
use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RelationshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $roles = Role::all();

        foreach ($users as $user) {

            DB::table('user_role')->insert([
                'user_id' => $user->id,
                'role_id' => $roles->random()->id,
            ]);
        }

        $students = Student::all();
        $courses = Course::all();

        foreach ($students as $student) {

            DB::table('class_student')->insert([
                'student_id' => $student->id,
                'course_id' => $courses->random()->id,
            ]);
        }
    }
}
