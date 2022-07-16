<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Game;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $videoable = $this->videoable();

        return [
            'name' => $this->faker->word(),
            'link' => $this->faker->word(),
            'videoable_id' => $videoable::get()->random()->id,
            'videoable_type' => $videoable,
        ];
    }

    public function videoable()
    {
        return $this->faker->randomElement([
            Game::class,
        ]);
    }
}
