<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::factory()->count(50)->create();

        foreach ($products as $product)
        {
            $product->warehouses()->create([
               "quantity" => rand(1, 10),
                "product_id" => rand(1, 4),
            ]);
        }
    }
}
