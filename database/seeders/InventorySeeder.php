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
			1 => 0,
			2 => 0,
			3 => 0,
			4 => 0,
			5 => 0,
			// TOYS (12)
			6 => 0,
			7 => 0,
			// 8 => 0,
			// HOME (4)
			// 9 => 0,
			// 10 => 0,
			// 11 => 0,
			// 12 => 0,
		];

		foreach ($inventory as $product_id => $stock) {
			Inventory::create([
				'product_id' => $product_id,
				'stock' => $stock,
			]);
		}
    }
}
