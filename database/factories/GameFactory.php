<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Publisher;
use App\Models\Developer;
use App\Models\Serie;
use App\Models\Franchise;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'description' => $this->faker->paragraph(),
            'ean' => $this->faker->ean13(),
            'publisher_id' => Publisher::get()->random()->id,
            'developer_id' => Developer::get()->random()->id,
            'serie_id' => Serie::get()->random()->id,
            'franchise_id' => Franchise::get()->random()->id,
            'active' => $this->faker->boolean(false),
            'tba' => $this->faker->boolean(false),
            'tbd' => $this->faker->boolean(false),
            'q1' => $this->faker->boolean(false),
            'q2' => $this->faker->boolean(false),
            'q3' => $this->faker->boolean(false),
            'q4' => $this->faker->boolean(false),
            'release_day' => $this->faker->dayOfMonth(),
            'release_month' => $this->faker->month(),
            'release_year' => $this->faker->year(),
        ];
    }

    public function noDescription()
    {
        return $this->state(function (array $attributes) {
            return [
                'description' => null,
            ];
        });
    }

    public function noEan()
    {
        return $this->state(function (array $attributes) {
            return [
                'ean' => null,
            ];
        });
    }

    public function noSerie()
    {
        return $this->state(function (array $attributes) {
            return [
                'serie_id' => null,
            ];
        });
    }

    public function noFranchise()
    {
        return $this->state(function (array $attributes) {
            return [
                'franchise_id' => null,
            ];
        });
    }

    public function noDay()
    {
        return $this->state(function (array $attributes) {
            return [
                'release_day' => null,
            ];
        });
    }

    public function noMonth()
    {
        return $this->state(function (array $attributes) {
            return [
                'release_month' => null,
            ];
        });
    }

    public function noYear()
    {
        return $this->state(function (array $attributes) {
            return [
                'release_year' => null,
            ];
        });
    }
}
