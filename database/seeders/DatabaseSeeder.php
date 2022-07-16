<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            GenreSeeder::class,
            PlatformSeeder::class,
            PublisherSeeder::class,
            DeveloperSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            FranchiseSeeder::class,
            SerieSeeder::class,
            GameSeeder::class,
            ArticleSeeder::class,
            ImageSeeder::class,
            VideoSeeder::class,
        ]);
    }
}
