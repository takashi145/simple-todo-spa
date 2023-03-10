<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_id' => rand(1, 2),
            'title' => $this->faker->word,
            'description' => $this->faker->realText,
            'deadline' => $this->faker->date,
            'completed' => $this->faker->boolean,
        ];
    }
}
