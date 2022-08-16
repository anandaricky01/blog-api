<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence($this->faker->numberBetween(1, 6)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            'body' => collect($this->faker->paragraphs($this->faker->numberBetween(5,7)))->map(function($p){
                return "<p>$p</p>";
            })->implode(''),
            'category_id' => $this->faker->numberBetween(1,4),
            'user_id' => $this->faker->numberBetween(1,10)
        ];
    }
}
