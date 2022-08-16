<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        Post::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Category::create([
            'category' => 'Lifestyle',
            'slug' => 'lifestyle'
        ]);
        Category::create([
            'category' => 'Technology',
            'slug' => 'technolofy'
        ]);
        Category::create([
            'category' => 'Sport',
            'slug' => 'sport'
        ]);
        Category::create([
            'category' => 'Entertainment',
            'slug' => 'entertainment'
        ]);
    }
}
