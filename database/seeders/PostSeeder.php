<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Post::create([
            'user_id' => 1,
            'title' => 'Some title',
            'short_content' => 'lorem ipsum',
            'content' => 'lorem ipsum dolor sit amet. I\'m gonna be filthy rich with net worth of $100M.',
            'photo' => null,
        ]);

        Post::create([
            'user_id' => 1,
            'title' => 'Random title',
            'short_content' => 'Lorem Ipsum',
            'content' => 'lorem ipsum dolor sit amet. I\'m gonna be filthy rich with net worth of $100M and escape the matrix, slavery.',
            'photo' => null,
        ]);
    }
}
