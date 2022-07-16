<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Serie;

class SerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Serie::factory()
            ->state([
                'name' => 'God of War',
                'first_game_release' => 2005,
            ])
            ->create();
    }
}
