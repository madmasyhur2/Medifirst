<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 */
	public function run(): void
	{
		// User::factory(10)->create();

		$this->call([
			RoleSeeder::class,
			RolesAndPermissionsSeeder::class,
			UserSeeder::class,
			// BillingSeeder::class,
			// CategorySeeder::class,
			// MembershipSeeder::class,
			// SupplierSeeder::class,
			// StoreSeeder::class,
			// ProductSeeder::class,
			// SaleSeeder::class,
			// PurchaseSeeder::class,
		]);
	}
}
