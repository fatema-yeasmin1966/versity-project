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
            'doctor_id' => $this->faker->numberBetween(1,10),
            'duration' => $this->faker->name,
            'quantity' => $this->faker->numberBetween(1,10),
            'day' => $this->faker->dayOfWeek,
            'place' => $this->faker->name,
            'description' => $this->faker->text,
        ];
    }
}
