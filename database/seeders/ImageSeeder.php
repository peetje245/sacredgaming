<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Image;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Image::factory()
            ->state([
                'name' => '202206212337maxresdefault.jpg',
            ])
            ->count(5)
            ->create();

        Image::factory()
            ->state([
                'name' => '202206222304948x1200.jpg'
            ])
            ->count(5)
            ->create();
    }
}
