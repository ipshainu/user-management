<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Department;
use App\Models\Designation;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create departments and designations
        Department::factory()->count(5)->create();
        Designation::factory()->count(5)->create();

        // Create users
        User::factory()->count(20)->create();
    }
}
