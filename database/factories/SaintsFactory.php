<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SaintsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake() -> firstname(),
            'birth_place' => fake() -> city(),
            'blessing_date' => fake() -> dateTime(),
            'blessing_count' => fake() -> numberBetween(1, 99),
        ];
    }
}
