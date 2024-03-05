<?php

namespace Database\Factories;

use App\Models\Membership;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale>
 */
class SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cashier_id' => User::inRandomOrder()->first()->id,
            'membership_id' => Membership::inRandomOrder()->first()->id,
            'sold_to' => $this->faker->name,
            'is_cash' => $this->faker->boolean,
            'sold_at' => $this->faker->date(),
            'price' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }
}
