<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        \App\Models\Article::create([
            'title' => 'Sample Article',
            'slug' => 'sample-article',
            'content' => 'This is a sample article content.',
            'image' => null,
            'status' => 'PUBLISH',
        ]);
        
    }
}
