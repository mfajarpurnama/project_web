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
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('1234')
        ]);
        User::create([
            'name' => 'jayy',
            'email' => 'pelanggan@gmail.com',
            'role' => 'pelanggan',
            'password' => bcrypt('1234')
        ]);
    }
}
