<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Apteka>
 */
class AptekaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'region_id' => rand(1, 6),
            'name' => fake()->sentence(2),
            'address' => fake()->address(),
            'owner_name' => fake()->name,
            'owner_phone' => fake()->phoneNumber(),
        ];
    }
}
