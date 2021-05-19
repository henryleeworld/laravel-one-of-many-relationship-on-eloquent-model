<?php

namespace Database\Seeders;

use App\Models\Login;
use App\Models\State;
use App\Models\User;
use Illuminate\Database\Seeder;

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
            ->count(100)
            ->has(State::factory(30))
            ->has(Login::factory(30))
            ->create();
    }
}
