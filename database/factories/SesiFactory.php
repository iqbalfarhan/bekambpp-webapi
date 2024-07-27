<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sesi>
 */
class SesiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order' => fake()->randomNumber(1),
            'name' => fake()->words(2, true),
            'jam' => [
                fake()->time("H:i"),
                fake()->time("H:i")
            ],
            'keterangan' => fake()->sentence(),
        ];
    }
}
