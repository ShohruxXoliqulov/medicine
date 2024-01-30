<?php

namespace Database\Seeders;

use App\Models\Apteka;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AptekaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Apteka::factory()->count(25)->create();
    }
}
