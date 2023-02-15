<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->unique()->sentence(),
            'desc' => fake()->paragraph(),
            'summary' => fake()->paragraphs(fake()->numberBetween(5, 10), true),
            'cover' => asset('images/examples/books/'. fake()->numberBetween(1, 5) .'.jpg'),
            'author_id' => fake()->numberBetween(4, 8),
            'category_id' =>  fake()->numberBetween(1, 3),
            'genre_id' => fake()->numberBetween(1, 25),
            'document' => asset('docs/examples/1.pdf'),
            'status' => ['draft', 'published', 'hidden'][fake()->numberBetween(0, 2)],
            'admin_status' => ['pending', 'approved'][fake()->numberBetween(0, 1)],
            'price' => fake()->numberBetween(5000, 234000),
        ];
    }
}
