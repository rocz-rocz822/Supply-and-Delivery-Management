<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
		$roles = [
			"admin" => "Administrator",
			"supplier" => "Supplier",
		];

		foreach ($roles as $role => $description) {
			Role::create([
				"role" => $role,
				"description" => $description,
			]);
		}
    }
}
