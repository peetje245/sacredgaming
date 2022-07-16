<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::factory()
            ->create([
                'title' => 'Owner',
            ]);

        Role::factory()
            ->create([
                'title' => 'Admin',
            ]);


        Role::factory()
            ->create([
                'title' => 'Journalist',
            ]);

        Role::factory()
            ->create([
                'title' => 'User',
            ]);
    }
}
