<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\ProductCategory;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
		$product_categories = [
			// RING (5)
            1 => 3, // Luna Annulus
            2 => 3, // Terra Annulus
            3 => 3, // Caelum Annulus
            4 => 3, // Sol Annulus
            5 => 3, // Noctis Annulus

            // NECKLACE (5)
            6 => 2, // Astra Monile
            7 => 2, // Caelum Monile
            // 8 => 2, // Luna Monile
            // 9 => 2, // Sol Monile
            // 10 => 2, // Noctis Monile

            // BRACELET (4)
            // 11 => 1, // Astra Armilla
            // 12 => 1, // Caelum Armilla
            // 13 => 1, // Luna Armilla
            // 14 => 1, // Sol Armilla

            // PACKAGE SET (5)
            // 15 => 4, // Earth and Stars Package Set
            // 16 => 4, // Sunkissed Sky Package Set
            // 17 => 4, // Iridescent Moon Package Set
            // 18 => 4, // Incandescent Sun Package Set
            // 19 => 4, // Moonlit Night Package Set

			// Additional Categories for Other Products (Adjust as needed)
            // Example: Health (3)
            // 20 => 3, // Product ID 20
            // 21 => 3, // Product ID 21
            // 22 => 3, // Product ID 22
            // // Example: Toys (12)
            // 23 => 12, // Product ID 23
            // 24 => 12, // Product ID 24
            // 25 => 12, // Product ID 25
		];

		foreach ($product_categories as $product_id => $category_id) {
			ProductCategory::create([
				'product_id' => $product_id,
				'category_id' => $category_id,
			]);
		}
    }
}
