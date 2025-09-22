<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create a test user with hashed password
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Article::factory()->count(50)->create();
    }
}
