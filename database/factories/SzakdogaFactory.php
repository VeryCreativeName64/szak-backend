<?php

namespace Database\Factories;

use App\Models\Szakdoga;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Szakdoga>
 */
class SzakdogaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'szakdoga_nev' => fake()->sentence(3),
            'githublink' => fake()->url(),
            'oldallink' => fake()->url(),
            'tagok_neve' => fake()->name() . ', ' . fake()->name(),
        ];
    }
}
