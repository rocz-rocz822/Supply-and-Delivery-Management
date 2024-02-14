<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
			[
				'first_name' => 'Admin',
				'last_name' => 'User',
				'email' => 'admin@cometal.com',
				'email_verified_at' => now(),
				'password' => bcrypt('password'),
				'phone_number' => '+63 933 123 4567',
				'role_id' => 1,
			],
			[
				'first_name' => 'Supplier',
				'last_name' => 'User',
				'email' => 'supplier@cometal.com',
				'email_verified_at' => now(),
				'password' => bcrypt('password'),
				'phone_number' => '+63 933 765 4321',
				'role_id' => 2,
			],
		];

		foreach ($users as $user)
			User::create($user);
    }
}
