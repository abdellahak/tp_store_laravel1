<?php

namespace Database\Factories;

use App\Models\Categorie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produit>
 */
class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => fake()->unique()->sentence(),
            'prix' => fake()->randomFloat(2, 1, 1000),
            'quantite' => fake()->randomNumber(2),
            'description' => fake()->text(20),
            'categorie_id' => Categorie::inRandomOrder()->first()->id,
        ];
    }
}
