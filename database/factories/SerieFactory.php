<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Serie>
 */
class SerieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'first_game_release' => $this->faker->year(),
        ];
    }

    public function noFirstGameRelease()
    {
        return $this->state(function (array $attributes) {
            return [
                'first_game_release' => null,
            ];
        });
    }
}
