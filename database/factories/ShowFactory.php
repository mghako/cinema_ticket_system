<?php

namespace Database\Factories;

use App\Models\CinemaHall;
use App\Models\Movie;
use App\Models\Show;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShowFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Show::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'show_date' => $this->faker->date(),
            'start_time' => $this->faker->time(),
            'end_time' => $this->faker->time(),
            'cinema_hall_id' => CinemaHall::factory(),
            'movie_id' => Movie::factory()
        ];
    }
}
