<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence,
            'content' => fake()->paragraphs(3, true),
            'image' => fake()->imageUrl(),
            'theme_id' => \App\Models\Theme::factory(),
            'author_id' => \App\Models\User::factory(),
            'status' => fake()->randomElement(['Rejected', 'Approved', 'Pending', 'Published']),
            'publication_date' => fake()->dateTimeThisYear(),
        ];
    }
}
