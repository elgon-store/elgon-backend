<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory()->create([
            'title' => 'Fiction',
            'photo' => asset('images/examples/categories/fiction.jpg'),
        ]);
        Category::factory()->create([
            'title' => 'Non-Fiction',
            'photo' => asset('images/examples/categories/non-fiction.jpg'),
        ]);
        Category::factory()->create([
            'title' => 'Education & Academics',
            'photo' => asset('images/examples/categories/education.jpg'),
        ]);
    }
}
