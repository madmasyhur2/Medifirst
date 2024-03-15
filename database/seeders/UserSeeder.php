<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		$owner = User::create([
			'name' => 'Pak Owner',
			'email' => 'owner@medifirst.id',
			'password' => bcrypt('owner'),
			'role' => 'owner',
			'address' => fake('id_ID')->address(),
			'phone_number' => fake('id_ID')->phoneNumber(),
		]);

		$owner->assignRole('owner');

		$warehouse = User::create([
			'name' => 'Tuan Gudang',
			'email' => 'warehouse@medifirst.id',
			'password' => bcrypt('warehouse'),
			'role' => 'warehouse',
			'address' => fake('id_ID')->address(),
			'phone_number' => fake('id_ID')->phoneNumber(),
		]);

		$warehouse->assignRole('warehouse');

		$cashier = User::create([
			'name' => 'Mbak Kasir',
			'email' => 'cashier@medifirst.id',
			'password' => bcrypt('cashier'),
			'role' => 'cashier',
			'address' => fake('id_ID')->address(),
			'phone_number' => fake('id_ID')->phoneNumber(),
		]);

		$cashier->assignRole('cashier');

		$finance = User::create([
			'name' => 'Mas Finance',
			'email' => 'finance@medifirst.id',
			'password' => bcrypt('finance'),
			'role' => 'finance',
			'address' => fake('id_ID')->address(),
			'phone_number' => fake('id_ID')->phoneNumber(),
		]);

		$finance->assignRole('finance');
	}
}
