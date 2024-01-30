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
            ProducttypeSeeder::class,
            ProductSeeder::class,
            UserSeeder::class,
            RegionSeeder::class,
            EmployeeSeeder::class,
            AptekaSeeder::class,
            DoctorSeeder::class,
            MeetingSeeder::class,
        ]);
    }
}
