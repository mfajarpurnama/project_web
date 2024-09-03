<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'fajar',
            'email' => 'fajar@gmail.com',
            'level' => 'admin',
            'password' => bcrypt('1234')
        ]);
        User::create([
            'name' => 'geusan',
            'email' => 'geusan@gmail.com',
            'level' => 'pelanggan',
            'password' => bcrypt('1234')
        ]);
    }
}
