<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
		$categories = [
			'Ring' => 'Ring',
			'Necklace' => 'Necklace',
			'Bracelet' => 'Bracelet',
			'Package Set' => 'Package',
		];

		foreach ($categories as $category => $description) {
			Category::create([
				'category' => $category,
				'description' => $description,
			]);
		}
    }
}
