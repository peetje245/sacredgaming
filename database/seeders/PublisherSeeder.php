<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Publisher;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Publisher::factory()
            ->state([
                'name' => 'Axolot Games',
                'headquarter' => '',
                'established' => ''
            ])
            ->create();

        Publisher::factory()
            ->state([
                'name' => 'Playstation PC LLC',
                'headquarter' => '',
                'established' => ''
            ])
            ->create();
    }
}
