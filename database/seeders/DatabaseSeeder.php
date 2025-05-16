<?php

namespace Database\Seeders;

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
            ProductSeeder::class,
            CitySeeder::class,
        ]);

        // Seed users table
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'superuser',
        ]);

        User::create(['name' => 'Evaldas', 'email' => 'random@example.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Jonas', 'email' => 'jonas@example.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Mantas', 'email' => 'mantas@example.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Greta', 'email' => 'greta@example.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Tomas', 'email' => 'tomas@example.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Ieva', 'email' => 'ieva@example.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Karolis', 'email' => 'karolis@example.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Justina', 'email' => 'justina@example.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Dovydas', 'email' => 'dovydas@example.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Lukas', 'email' => 'lukas@example.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Egle', 'email' => 'egle@example.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Paulius', 'email' => 'paulius@example.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Austeja', 'email' => 'austeja@example.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Simas', 'email' => 'simas@example.com', 'password' => bcrypt('password')]);
    }
}
