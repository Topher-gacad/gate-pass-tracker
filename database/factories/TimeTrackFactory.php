<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TimeTrack>
 */
class TimeTrackFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //"TODO: Implement user and time track relationship."
        return [
            'user_id' => $this->faker->numberBetween(1, 100),
            'reason' => $this->faker->sentence(),
            'location' => $this->faker->city(),
            'type' => $this->faker->randomElement(['in', 'out']),
        ];
    }
}
