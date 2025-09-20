<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $password;

        return [
            'id' => $this->faker->unique()->regexify('[A-Za-z0-9]{8}'), 
            'email' => $this->faker->unique()->safeEmail(),
            'password' => $password ?: $password = Hash::make('password'), 
            'company' => $this->faker->company(),
            'department' => $this->faker->word(),
            'full_name' => $this->faker->name(),
            'job_role' => $this->faker->jobTitle(),
            'role' => $this->faker->randomElement(['guard', 'admin']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}


