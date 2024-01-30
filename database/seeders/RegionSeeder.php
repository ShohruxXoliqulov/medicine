<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{

    private $regions = [
        'Toshkent',
        'Andijon',
        'Farg\'ona',
        'Qashqadaryo',
        'Surxondaryo',
        'Jizzax'
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        foreach ($this->regions as $region)
        {
            Region::create([
                'name' => $region,
            ]);
        }
    }
}
