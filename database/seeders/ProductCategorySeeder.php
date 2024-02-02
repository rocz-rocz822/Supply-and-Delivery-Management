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
			// HEALTH (3)
			1 => 3,
			2 => 3,
			3 => 3,
			4 => 3,
			5 => 3,
			// TOYS (12)
			6 => 12,
			7 => 12,
			8 => 12,
			// HOME (4)
			9 => 4,
			10 => 4,
			11 => 4,
			12 => 4,
		];

		foreach ($product_categories as $product_id => $category_id) {
			ProductCategory::create([
				'product_id' => $product_id,
				'category_id' => $category_id,
			]);
		}
    }
}
