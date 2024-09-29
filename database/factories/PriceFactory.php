<?php

namespace Database\Factories;

use App\Models\Price;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Price>
 */
class PriceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    protected $model = Price::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'price' => rand(100, 10000),
            'publish_at' => fake()->dateTimeBetween(
                '-30 days',
                '+30 days'
            )
        ];
    }
}
