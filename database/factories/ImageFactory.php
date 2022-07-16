<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Game;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $imageable = $this->imageable();

        return [
            'name' => $this->faker->image(null, 640, 480),
            'imageable_id' => $imageable::get()->random()->id,
            'imageable_type' => $imageable,
        ];
    }

    public function imageable()
    {
        return $this->faker->randomElement([
            User::class,
            Game::class,
        ]);
    }
}
