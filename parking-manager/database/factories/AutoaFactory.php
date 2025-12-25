<?php

namespace Database\Factories;

use App\Models\Autoa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Autoa>
 */
class AutoaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Autoa::class;

    public function definition(): array
    {
        return [
            'Plaka' => $this->faker->randomNumber(4,true),
            'Beraz' => $this->faker->word(),
            'Modeloa' => $this->faker->word(),
        ];
    }
}
