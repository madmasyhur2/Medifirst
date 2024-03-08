<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Store;
use App\Models\Supplier;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'store_id' => 1,
            'supplier_id' => Supplier::inRandomOrder()->first()->id,
            'category_id' => Category::inRandomOrder()->first()->id,
            'sku_code' => $this->faker->unique()->text(10),
            'batch_code' => $this->faker->unique()->text(10),
            'name' => $this->faker->name,
            'variant' => $this->faker->randomElement(['pcs', 'strip', 'box']),
            'group' => $this->faker->randomElement(['obat bebas', 'obat bebas terbatas', 'obat keras', 'lain-lain']),
            'is_consigment' => $this->faker->boolean,
            'location' => $this->faker->text(10),
            'stock' => $this->faker->randomNumber(1, 1000),
            'expired_at' => $this->faker->date(),
            'cost' => $this->faker->randomFloat(2, 0, 1000),
            'margin' => $this->faker->randomFloat(2, 0, 1000),
            'selling_price' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }
}
