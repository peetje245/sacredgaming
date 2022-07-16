<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Franchise;

class FranchiseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Franchise::factory()
            ->state([
                'title' => 'Mario',
                'release_year' => '1981',
            ])
            ->create();

        Franchise::factory()
            ->state([
                'title' => 'Pokémon',
                'release_year' => '1996',
            ])
            ->create();

        Franchise::factory()
            ->state([
                'title' => 'Call of Duty',
                'release_year' => '2003',
            ])
            ->create();

        Franchise::factory()
            ->state([
                'title' => 'Grand Theft Auto',
                'release_year' => '1997',
            ])
            ->create();

        Franchise::factory()
            ->state([
                'title' => 'FIFA',
                'release_year' => '1993',
            ])
            ->create();

        Franchise::factory()
            ->state([
                'title' => 'Lego',
                'release_year' => '1995',
            ])
            ->create();

        Franchise::factory()
            ->state([
                'title' => 'The Sims',
                'release_year' => '2000',
            ])
            ->create();

        Franchise::factory()
            ->state([
                'title' => 'Final Fantasy',
                'release_year' => '1987',
            ])
            ->create();

        Franchise::factory()
            ->state([
                'title' => "Assassin's Creed",
                'release_year' => '2007',
            ])
            ->create();

        Franchise::factory()
            ->state([
                'title' => "PlayStation Studios",
                'release_year' => '2005',
            ])
            ->create();
    }
}
