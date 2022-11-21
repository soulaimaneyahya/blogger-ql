<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Topic;
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
            'title' => fake()->sentence(6),
            'content' => fake()->paragraphs(12, true),
            'lead' => fake()->paragraph(2),
            'author_id' => User::all()->random()->id,
            'topic_id' => Topic::all()->random()->id,
            'created_at' => fake()->dateTimeBetween('-3 weeks')
        ];
    }
}
