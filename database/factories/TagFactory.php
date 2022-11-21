<?php

namespace Database\Factories;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $tags = ['php', 'javascript', 'html', 'css', 'laravel', 'aws', 'vuejs', 'reactjs', 'symfony', 'java', 'android', 'myql'];
        foreach ($tags as $tag) {
            Tag::create([
                'name' => $tag
            ]);
        }
    }
}
