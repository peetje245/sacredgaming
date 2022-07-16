<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()
            ->unverified()
            ->create([
                'name' => 'Romee koning',
                'username' => 'Peetje245',
                'email' => 'romeehkoning@gmail.com',
                'banned' => 0,
                'role_id' => 1
            ]);

        User::factory()
            ->unverified()
            ->count(5)
            ->create();
    }
}
