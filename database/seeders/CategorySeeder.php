<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Web Design'],
            ['name' => 'Web Development'],
            ['name' => 'Online Marketing'],
            ['name' => 'Keyword Research'],
            ['name' => 'Email Marketing'],
        ];

        Category::insert($data);
    }
}
