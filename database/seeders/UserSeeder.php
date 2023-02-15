<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin
        User::factory()->create([
            'name' => 'Administrator',
            'email' => 'admin@elgonbooks.com',
            'password' => bcrypt('Admin@Elgon23'),
            'role' => 'admin',
            'status' => 'active',
        ]);

        User::factory()->count(2)
            ->create([
                'role' => 'admin',
            ]);

        User::factory()->create([
            'role' => 'author',
            'email' => 'author@elgonbooks.com',
            'password' => bcrypt('Author@Elgon23'),
        ]);

        User::factory()->count(4)
            ->create([
                'role' => 'author',
            ]);

        User::factory()->create([
            'role' => 'user',
            'email' => 'user@elgonbooks.com',
            'password' => bcrypt('User@Elgon23'),
        ]);

        User::factory()->count(13)
            ->create([
                'role' => 'user',
            ]);
    }
}
