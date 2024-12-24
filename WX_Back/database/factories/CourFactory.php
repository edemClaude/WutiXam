<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cour>
 */
class CourFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' => $this->faker->imageUrl(640, 480, 'animals', true),
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(3),
            'price' => 0.00,
            'date_creation' => now(),
            'status' => 1
        ];
    }
}
