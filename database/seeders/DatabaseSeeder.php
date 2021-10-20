<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        \App\Models\City::factory(2)->create();
        // \App\Models\Cinema::factory(10)->create();
        // \App\Models\CinemaHall::factory(10)->create([
        //     'cinema_id' => 1
        // ]);
        // \App\Models\CinemaSeat::factory(8)->create([
        //     'cinema_hall_id' => 1
        // ]);
        // \App\Models\Movie::factory(10)->create();
        // \App\Models\Show::factory(4)->create([
        //     'cinema_hall_id' => 1,
        //     'movie_id' => 1
        // ]);
    }
}
