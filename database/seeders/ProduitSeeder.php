<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Produit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();

        Produit::factory(10)
        ->sequence(fn() => [
            'category_id' => $categories->random(),
        ])
        
        ->create();
    }
}
