<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::factory()
            ->state([
                'title' => 'Action',
            ])
            ->create();

        Genre::factory()
            ->state([
                'title' => 'Adventure',
            ])
            ->create();

        Genre::factory()
            ->state([
                'title' => 'Action-adventure',
            ])
            ->create();

        Genre::factory()
            ->state([
                'title' => 'RPG',
            ])
            ->create();

        Genre::factory()
            ->state([
                'title' => 'Strategy',
            ])
            ->create();

        Genre::factory()
            ->state([
                'title' => 'Simulation',
            ])
            ->create();

        Genre::factory()
            ->state([
                'title' => 'Puzzle',
            ])
            ->create();

        Genre::factory()
            ->state([
                'title' => 'Sports',
            ])
            ->create();

        Genre::factory()
            ->state([
                'title' => 'Racing',
            ])
            ->create();

        Genre::factory()
            ->state([
                'title' => 'Idle ',
            ])
            ->create();

        Genre::factory()
            ->state([
                'title' => 'Survival',
            ])
            ->create();

        Genre::factory()
            ->state([
                'title' => 'Multiplayer',
            ])
            ->create();
    }
}
