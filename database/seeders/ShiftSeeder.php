<?php

namespace Database\Seeders;

use App\Models\Shift;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShiftSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		$shifts = [
			[
				'user_id' => 2,
				'hari' => 'rabu',
				'jam_masuk' => '12:00',
				'jam_pulang' => '14:00',
			],
			[
				'user_id' => 2,
				'hari' => 'kamis',
				'jam_masuk' => '13:00',
				'jam_pulang' => '15:00',
			],
			[
				'user_id' => 3,
				'hari' => 'senin',
				'jam_masuk' => '08:00',
				'jam_pulang' => '10:00',
			],
			[
				'user_id' => 3,
				'hari' => 'selasa',
				'jam_masuk' => '10:00',
				'jam_pulang' => '12:00',
			],
			[
				'user_id' => 3,
				'hari' => 'rabu',
				'jam_masuk' => '13:00',
				'jam_pulang' => '15:00',
			],
			[
				'user_id' => 4,
				'hari' => 'sabtu',
				'jam_masuk' => '13:00',
				'jam_pulang' => '17:00',
			],
		];

		Shift::insert($shifts);
	}
}
