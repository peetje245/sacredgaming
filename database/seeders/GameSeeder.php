<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

use App\Models\Game;
use App\Models\Publisher;
use App\Models\Developer;
use App\Models\Franchise;
use App\Models\Genre;
use App\Models\Platform;
use App\Models\Serie;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Game::factory()
            ->state([
                'title' => 'Raft',
                'active' => true,
                'release_day' => 20,
                'release_month' => 06,
                'release_year' => 2022
            ])
            ->state(new Sequence(
                fn ($sequence) => ['publisher_id' => Publisher::where('name', 'Axolot Games')->select('id')->first()],
            ))
            ->state(new Sequence(
                fn ($sequence) => ['developer_id' => Developer::where('name', 'Redbeet Interactive')->select('id')->first()],
            ))
            ->hasAttached(Genre::where('title', 'Survival')->orWhere('title', 'Multiplayer')->get())
            ->hasAttached(Platform::where('title', 'Microsoft Windows')->orWhere('title', 'Linux')->get())
            ->noFranchise()
            ->noDescription()
            ->noEan()
            ->noSerie()
            ->create();

        Game::factory()
            ->state([
                'title' => 'God of War',
                'active' => true,
                'release_day' => 14,
                'release_month' => 01,
                'release_year' => 2022
            ])
            ->state(new Sequence(
                fn ($sequence) => ['publisher_id' => Publisher::where('name', 'Playstation PC LLC')->select('id')->first()],
            ))
            ->state(new Sequence(
                fn ($sequence) => ['developer_id' => Developer::where('name', 'Santa Monica Studio')->select('id')->first()],
            ))
            ->state(new Sequence(
                fn ($sequence) => ['franchise_id' => Franchise::where('title', 'PlayStation Studios')->select('id')->first()],
            ))
            ->state(new Sequence(
                fn ($sequence) => ['serie_id' => Serie::where('name', 'God of War')->select('id')->first()],
            ))
            ->hasAttached(Genre::where('title', 'Action')->orWhere('title', 'Adventure')->orWhere('title', 'RPG')->get())
            ->hasAttached(Platform::where('title', 'Microsoft Windows')->orWhere('title', 'PlayStation 4')->get())
            ->create();

        Game::factory()
            ->hasAttached(Genre::get())
            ->hasAttached(Platform::get())
            ->count(20)
            ->create();
    }
}
