<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Store>
 */
class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'owner_id' => 1,
            'logo_photo_path' => $this->faker->imageUrl(),
            'name' => $this->faker->name,
            'address' => $this->faker->address,
            'province' => $this->faker->state,
            'city' => $this->faker->city,
            'district' => $this->faker->city,
            'village' => $this->faker->city,
            'license_photo_path' => $this->faker->imageUrl(),
        ];
    }
}
