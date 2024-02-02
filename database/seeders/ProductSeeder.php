<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
		$products = [
			// HEALTH (3)
			[
				'name' => 'Soap',
				'description' => 'A bar of soap',
				'price' => 25.00,
			],
			[
				'name' => 'Shampoo',
				'description' => 'A bottle of shampoo',
				'price' => 100.00,
			],
			[
				'name' => 'Conditioner',
				'description' => 'A bottle of conditioner',
				'price' => 100.00,
			],
			[
				'name' => 'Toothpaste',
				'description' => 'A tube of toothpaste',
				'price' => 50.00,
			],
			[
				'name' => 'Toothbrush',
				'description' => 'A toothbrush',
				'price' => 50.00,
			],

			// TOYS (12)
			[
				'name' => 'Action Figure',
				'description' => 'An action figure',
				'price' => 500.00,
			],
			[
				'name' => 'Drone',
				'description' => 'A drone',
				'price' => 1000.00,
			],
			[
				'name' => 'RC Car',
				'description' => 'A remote-controlled car',
				'price' => 250.00,
			],

			// HOME (4)
			[
				'name' => 'Curtains',
				'description' => 'A pair of curtains',
				'price' => 500.00,
			],
			[
				'name' => 'Pillow',
				'description' => 'A pillow',
				'price' => 250.00,
			],
			[
				'name' => 'Blanket',
				'description' => 'A blanket',
				'price' => 500.00,
			],
			[
				'name' => 'Bed',
				'description' => 'A bed',
				'price' => 5000.00,
			],
		];

		foreach ($products as $product)
			Product::create($product);
    }
}
