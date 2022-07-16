<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Video;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Video::factory()
            ->state([
                'name' => 'God of War Trailer',
                'link' => 'https://www.youtube.com/embed/K0u_kAWLJOA'
            ])
            ->create();

        Video::factory()
            ->state([
                'name' => 'God Of War (PS4 Pro) - FULL GAME - No Commentary',
                'link' => 'https://www.youtube.com/embed/Ruz8nx09Fh0'
            ])
            ->create();
    }
}
