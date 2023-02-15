<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::factory()->create([
            'title' => 'Fantasy',
            'category_id' => 1,
            'photo' => asset('images/examples/genres/1.jpg'),
        ]);
        Genre::factory()->create([
            'title' => 'Science Fiction',
            'category_id' => 1,
            'photo' => asset('images/examples/genres/1.jpg'),
        ]);
        Genre::factory()->create([
            'title' => 'Dystopian',
            'category_id' => 1,
            'photo' => asset('images/examples/genres/1.jpg'),
        ]);
        Genre::factory()->create([
            'title' => 'Adventure',
            'category_id' => 1,
            'photo' => asset('images/examples/genres/1.jpg'),
        ]);
        Genre::factory()->create([
            'title' => 'Romance',
            'category_id' => 1,
            'photo' => asset('images/examples/genres/1.jpg'),
        ]);
        Genre::factory()->create([
            'title' => 'Detective & Mystery',
            'category_id' => 1,
            'photo' => asset('images/examples/genres/1.jpg'),
        ]);
        Genre::factory()->create([
            'title' => 'Fables, Fairy & Folk Tales',
            'category_id' => 1,
            'photo' => asset('images/examples/genres/1.jpg'),
        ]);
        Genre::factory()->create([
            'title' => 'Classics',
            'category_id' => 1,
            'photo' => asset('images/examples/genres/1.jpg'),
        ]);
        Genre::factory()->create([
            'title' => 'Horror',
            'category_id' => 1,
            'photo' => asset('images/examples/genres/1.jpg'),
        ]);
        Genre::factory()->create([
            'title' => 'Humour& Satire',
            'category_id' => 1,
            'photo' => asset('images/examples/genres/1.jpg'),
        ]);
        Genre::factory()->create([
            'title' => 'Poetry',
            'category_id' => 1,
            'photo' => asset('images/examples/genres/1.jpg'),
        ]);
        Genre::factory()->create([
            'title' => 'War',
            'category_id' => 1,
            'photo' => asset('images/examples/genres/1.jpg'),
        ]);
        Genre::factory()->create([
            'title' => 'Plays',
            'category_id' => 1,
            'photo' => asset('images/examples/genres/1.jpg'),
        ]);
        Genre::factory()->create([
            'title' => 'Crime',
            'category_id' => 1,
            'photo' => asset('images/examples/genres/1.jpg'),
        ]);
        Genre::factory()->create([
            'title' => 'Adventures',
            'category_id' => 1,
            'photo' => asset('images/examples/genres/1.jpg'),
        ]);
        Genre::factory()->create([
            'title' => 'Biography',
            'category_id' => 2,
            'photo' => asset('images/examples/genres/1.jpg'),
        ]);
        Genre::factory()->create([
            'title' => 'Essays',
            'category_id' => 2,
            'photo' => asset('images/examples/genres/1.jpg'),
        ]);
        Genre::factory()->create([
            'title' => 'Self-help',
            'category_id' => 2,
            'photo' => asset('images/examples/genres/1.jpg'),
        ]);
        Genre::factory()->create([
            'title' => 'Autobiography & Memoir',
            'category_id' => 2,
            'photo' => asset('images/examples/genres/1.jpg'),
        ]);
        Genre::factory()->create([
            'title' => 'Art & Photography',
            'category_id' => 2,
            'photo' => asset('images/examples/genres/1.jpg'),
        ]);
        Genre::factory()->create([
            'title' => 'Cooking',
            'category_id' => 2,
            'photo' => asset('images/examples/genres/1.jpg'),
        ]);
        Genre::factory()->create([
            'title' => 'Health & Fitness',
            'category_id' => 2,
            'photo' => asset('images/examples/genres/1.jpg'),
        ]);
        Genre::factory()->create([
            'title' => 'History',
            'category_id' => 2,
            'photo' => asset('images/examples/genres/1.jpg'),
        ]);
        Genre::factory()->create([
            'title' => 'Motivational',
            'category_id' => 2,
            'photo' => asset('images/examples/genres/1.jpg'),
        ]);
        Genre::factory()->create([
            'title' => 'Politics & Social Sciences',
            'category_id' => 2,
            'photo' => asset('images/examples/genres/1.jpg'),
        ]);
        Genre::factory()->create([
            'title' => 'Religion & Spirituality',
            'category_id' => 2,
            'photo' => asset('images/examples/genres/1.jpg'),
        ]);
        Genre::factory()->create([
            'title' => 'Law & Criminology',
            'category_id' => 2,
            'photo' => asset('images/examples/genres/1.jpg'),
        ]);
        Genre::factory()->create([
            'title' => 'Learning',
            'category_id' => 2,
            'photo' => asset('images/examples/genres/1.jpg'),
        ]);
        Genre::factory()->create([
            'title' => 'Physics',
            'category_id' => 3,
            'photo' => asset('images/examples/genres/1.jpg'),
        ]);
        Genre::factory()->create([
            'title' => 'Biology',
            'category_id' => 3,
            'photo' => asset('images/examples/genres/1.jpg'),
        ]);
    }
}
