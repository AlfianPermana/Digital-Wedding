<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\tamu;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tamu>
 */
class TamuFactory extends Factory
{

    protected $model = tamu::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
        ];
    }
}
