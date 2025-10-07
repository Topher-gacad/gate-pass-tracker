<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected static ?string $password;

    public function definition(): array
    {
        static $password;

        return [
            'email' => $this->faker->unique()->safeEmail(),
            'password' => $password ?: $password = Hash::make('password'), 
            'company' => $this->faker->company(),
            'department' => $this->faker->word(),
            'full_name' => $this->faker->name(),
            'job_role' => $this->faker->jobTitle(),
            'role' => $this->faker->randomElement(['guard', 'admin']),
        ];
    }
}


