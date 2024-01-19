<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Recipe;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->unique()->word,
            'description' => $this->faker->unique()->text(200),
            'ingredients' => $this->faker->unique()->text(50),
            'instructions' => $this->faker->unique()->text(100),
            'user_id' => User::pluck('id')->random()
        ];
    }
}
