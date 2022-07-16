<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Developer;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Developer::factory()
            ->state([
                'name' => 'Redbeet Interactive',
                'headquarter' => '',
                'established' => ''
            ])
            ->create();

        Developer::factory()
            ->state([
                'name' => 'Santa Monica Studio',
                'headquarter' => '',
                'established' => ''
            ])
            ->create();
    }
}
