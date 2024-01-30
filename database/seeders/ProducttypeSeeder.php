<?php

namespace Database\Seeders;

use App\Models\Producttype;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProducttypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Producttype::create([
            'name' => 'tabletka',
        ]);

        Producttype::create([
            'name' => 'kapsula',
        ]);

        Producttype::create([
            'name' => 'sirob',
        ]);

        Producttype::create([
            'name' => 'flacon',
        ]);
    }
}
