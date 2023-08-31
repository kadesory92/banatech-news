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
            'title'=> fake()->sentence(rand(3, 10)),
            'slug'=> fake()->unique()->word(),
            'content'=> fake()->text(),
            'image'=> 'https://via.placeholder.com/1000',
            'is_featured'=> fake()->boolean(),
            'is_published'=> fake()->boolean(),
            //
        ];
    }
}
