<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		$permissionsByRole = [
			'owner' => [
				'read stock report',
				'read purchase report',
				'read sale report',
				'read pare to analysis',
				'create product from excel',
				'read diagram',
				'read purchase history',
				'read sales history',
				'read stock',

				'create owner account',
				'read owner account',
				'update owner account',
				'delete owner account',

				'create outlet',
				'read outlet',
				'update outlet',
				'delete outlet',

				'create employee account',
				'read employee account',
				'update employee account',
				'delete employee account',

				'create billing',
				'read billing',

				'read product',
				'transfer product',

				'create membership',
				'read membership',
				'update membership',
				'delete membership',

				'read purchase plan',
				'create purchase letter',

				'read order',
				'read invoice',
				'read finance report',
				'read debt',

				'create sales contact',
				'read sales contact',
				'update sales contact',
				'delete sales contact',

				'create supplier contact',
				'read supplier contact',
				'update supplier contact',
				'delete supplier contact',
			],

			'warehouse' => [
				// 'read sale report',
				// 'read pare to analysis',
				// 'create product from excel',

				'create product',
				// 'read product',
				'update product',
				'delete product',

				'create purchase plan',
				// 'read purchase plan',
				'update purchase plan',
				'delete purchase plan',

				// 'create purchase letter',
				// 'read order',

				'create invoice',
				// 'read invoice',

				// 'read sales contact',
				// 'read supplier contact',
			],

			'cashier' => [
				// 'read product',
				// 'read membership',
				'read sale',
				'create sale',
				'create rejected sale',
			],

			'finance' => [
				// 'read stock report',
				// 'read purchase report',

				'create finance report',
				// 'read finance report',
				'update finance report',

				// 'read debt',
			]
		];

		$insertPermissions = fn ($role) => collect($permissionsByRole[$role])
			->map(fn ($name) => DB::table('permissions')->insertGetId(['name' => $name, 'guard_name' => 'web']))
			->toArray();

		$permissionsIdsByRole = [
			'owner' => $insertPermissions('owner'),
			'warehouse' => $insertPermissions('warehouse'),
			'cashier' => $insertPermissions('cashier'),
			'finance' => $insertPermissions('finance'),
		];

		foreach ($permissionsIdsByRole as $role => $permissionsIds) {
			$role = Role::whereName($role)->first();

			DB::table('role_has_permissions')->insert(collect($permissionsIds)->map(fn ($id) => [
				'role_id' => $role->id,
				'permission_id' => $id,
			])->toArray());
		}
	}
}
