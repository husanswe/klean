<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Joe Schmoe',
            'email' => 'joeschmoe@example.com',
            'password' => Hash::make('loremipsum'),
        ]);

        User::factory(10)->create();
        User::factory(10)->create([
            'email' => 'joeschmoe@gmail.com',
            'name' => 'Joe Schmoe Jr'
        ]);
    }
}
