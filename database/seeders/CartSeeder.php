<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;

class CartSeeder extends Seeder
{
    public function run()
    {
        $users = User::all();

        foreach ($users as $user) {
            $product = Product::inRandomOrder()->first();

            Cart::create([
                'user_id' => $user->id,
                'product_id' => $product->id,
            ]);
        }
    }
}