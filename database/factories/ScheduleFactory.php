<?php

namespace Database\Factories;

use App\Models\Schedule;
use Illuminate\Database\Eloquent\Factories\Factory;

class ScheduleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Schedule::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'begin' => $this->faker->time($format = 'H:i:s', $max = 'now'),
            'end' => $this->faker->time($format = 'H:i:s', $max = 'now'),
            'on' => $this->faker->boolean($chanceOfGettingTrue = 5),
            'date' => $this->faker->date($format = 'Y/m/d', $max = 'now'),
        ];
    }
}