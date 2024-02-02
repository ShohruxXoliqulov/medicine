<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PermissionSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            DoctorSeeder::class,
            RegionSeeder::class,
            AptekaSeeder::class,
            MeetingSeeder::class,
            ProductSeeder::class,
            EmployeeSeeder::class,
            ProductTypeSeeder::class,
        ]);
    }
}
