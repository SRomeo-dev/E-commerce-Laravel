<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
    $nom = ucfirst(implode(' ', fake()->words(2)));
    $description = Str::limit(implode(' ', fake()->words(4)), 50);

    return [
        'image' => fake()->imageUrl,
        'nom' => $nom,
        'prix' => fake()->numberBetween(800, 800000),
        'description' => $description
    ];
}
}
