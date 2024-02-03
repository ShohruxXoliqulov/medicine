<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class RegionSeeder extends Seeder
{



    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $regions = File::get(storage_path("app/regions_mysql.sql"));
        dd($regions);
    }
}
