<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ProductSeeder::class, // Ensure this is added
        ]);

        // Seed users table
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'superuser',
        ]);

        User::create([
            'name' => 'Evaldas',
            'email' => 'random@example.com',
            'password' => bcrypt('password'),
            'role' => 'user',
        ]);
    }
}
