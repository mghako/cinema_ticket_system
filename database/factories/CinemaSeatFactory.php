<?php

namespace Database\Factories;

use App\Models\CinemaHall;
use App\Models\CinemaSeat;
use Illuminate\Database\Eloquent\Factories\Factory;

class CinemaSeatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CinemaSeat::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'seat_number' => $this->faker->unique()->randomDigitNotZero(),
            'type' => $this->faker->randomElement(['regular', 'premium']),
            'cinema_hall_id' => CinemaHall::factory()
        ];
    }
}
