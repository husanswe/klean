<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            ['name' => 'Design'],
            ['name' => 'Marekting'],
            ['name' => 'SEO'],
            ['name' => 'Writing'],
            ['name' => 'Consulting'],
            ['name' => 'Development'],
        ];

        Tag::insert($tags);
    }
}
