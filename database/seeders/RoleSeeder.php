<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::factory()->create([
            'role_name' => 'Teacher',
        ]);

        Role::factory()->create([
            'role_name' => 'Student',
        ]);

        Role::factory()->create([
            'role_name' => 'Admin',
        ]);
    }
}
