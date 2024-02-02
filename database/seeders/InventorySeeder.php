<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Inventory;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $inventory = [
			// HEALTH (3)
			1 => 100,
			2 => 100,
			3 => 100,
			4 => 100,
			5 => 100,
			// TOYS (12)
			6 => 50,
			7 => 10,
			8 => 25,
			// HOME (4)
			9 => 50,
			10 => 100,
			11 => 250,
			12 => 5,
		];

		foreach ($inventory as $product_id => $stock) {
			Inventory::create([
				'product_id' => $product_id,
				'stock' => $stock,
			]);
		}
    }
}
