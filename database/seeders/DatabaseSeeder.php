<?php

namespace Database\Seeders;

use App\Models\Activities;
use App\Models\User;
use App\Models\Categories;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1️⃣ Buat 5 user
        $users = User::factory(5)->create();

        foreach ($users as $user) {

            // 2️⃣ Buat 3 kategori untuk tiap user
            $categories = Categories::factory(3)->create([
                'user_id' => $user->id,
            ]);

            foreach ($categories as $category) {

                // 3️⃣ Buat 5 activity untuk tiap kategori
                Activities::factory(5)->create([
                    'user_id' => $user->id,
                    'categories_id' => $category->id,
                ]);
            }
        }
    }
}
