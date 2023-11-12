<?php

namespace Database\Factories;

use App\Models\kategori;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nama" => fake()->randomElement(["Majestic Adorn", "Sparkle Strand", "Tranquil Twirl", "Elegance Cuff"]),
            "desc" => fake()->paragraph(),
            "size" => fake()->randomFloat(14, 15, 16),
            "warna" => fake()->randomElement(["Rose", "Gold", "Silver",]),
            "berat" => fake()->randomFloat(2.1, 1.8, 0.7),
            'stok' => fake()->randomDigit(),
            'harga' => fake()->randomElement(['850000', '1000000', '670000', "2500000", '4500000']),
            "gambar" => fake()->randomElement(["product4-1.webp", "product5-1.webp", "product6-1.webp"]),
            'kategori_id' => Kategori::all()->random()->id,
        ];
    }
}
