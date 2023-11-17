<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Favorite;
use App\Models\Kategori;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Kategori::factory(4)->create();
        Product::factory(10)->create();
        $this->call([UserSeeders::class]);
        // Favorite::factory(15)->create();
    }
}
