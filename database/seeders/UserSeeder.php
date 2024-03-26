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
			'license_number' => '446/0153/1427/1-16',
			'license_expired_date' => '2025-08-20',
		]);

		$owner->assignRole('owner');

		$warehouse = User::create([
			'name' => 'Tuan Gudang',
			'email' => 'warehouse@medifirst.id',
			'password' => bcrypt('warehouse'),
			'role' => 'warehouse',
			'address' => fake('id_ID')->address(),
			'phone_number' => fake('id_ID')->phoneNumber(),
			'license_number' => null,
			'license_expired_date' => null,
		]);

		$warehouse->assignRole('warehouse');

		$cashier = User::create([
			'name' => 'Mbak Kasir',
			'email' => 'cashier@medifirst.id',
			'password' => bcrypt('cashier'),
			'role' => 'cashier',
			'address' => fake('id_ID')->address(),
			'phone_number' => fake('id_ID')->phoneNumber(),
			'license_number' => '446/0153/1427/1-16',
			'license_expired_date' => '2025-02-09',
		]);

		$cashier->assignRole('cashier');

		$finance = User::create([
			'name' => 'Mas Finance',
			'email' => 'finance@medifirst.id',
			'password' => bcrypt('finance'),
			'role' => 'finance',
			'address' => fake('id_ID')->address(),
			'phone_number' => fake('id_ID')->phoneNumber(),
			'license_number' => null,
			'license_expired_date' => null,
		]);

		$finance->assignRole('finance');
	}
}
