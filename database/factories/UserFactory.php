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
        return [
            'avatar' => 'https://i.pravatar.cc/150?img='.fake()->numberBetween(1, 70),
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'phone_number' => fake()->unique()->phoneNumber(),
            'password' => static::$password ??= Hash::make('Password!'),
            'address' => fake()->address(),
            'status' => fake()->randomElement(['active', 'inactive']),
            'last_login_at' => fake()->dateTimeBetween('-1 week', 'now'),
            'remember_token' => Str::random(10),
            'created_at' => fake()->dateTimeBetween('-1 years', 'now'),
        ];
    }
}
