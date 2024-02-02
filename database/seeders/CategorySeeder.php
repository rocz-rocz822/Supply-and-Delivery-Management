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
			'Electronics' => 'Electronic Devices and Accessories',
			'Fashion' => 'Clothing, Shoes, and Accessories',
			'Health' => 'Health and Personal Care',
			'Home' => 'Home and Kitchen',
			'Industrial' => 'Industrial and Scientific',
			'Jewelry' => 'Jewelry and Watches',
			'Music' => 'Musical Instruments',
			'Office' => 'Office Products',
			'Software' => 'Software',
			'Sports' => 'Sports and Outdoors',
			'Tools' => 'Tools and Home Improvement',
			'Toys' => 'Toys and Games',
			'Games' => 'Video Games',
		];

		foreach ($categories as $category => $description) {
			Category::create([
				'category' => $category,
				'description' => $description,
			]);
		}
    }
}
