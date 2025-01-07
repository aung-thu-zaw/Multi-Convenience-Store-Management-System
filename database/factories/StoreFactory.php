<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Store>
 */
class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $managerIds = User::pluck('id')->toArray();

        return [
            'manager_id' => fake()->randomElement($managerIds),
            'store_code' => fake()->unique()->regexify('[A-Z]{3}[0-9]{4}'),
            'name' => fake()->company(),
            'location' => fake()->address(),
            'contact_number' => fake()->phoneNumber(),
            'contact_email' => fake()->unique()->safeEmail(),
            'opening_hours' => json_encode([
                'monday' => '09:00 - 18:00',
                'tuesday' => '09:00 - 18:00',
                'wednesday' => '09:00 - 18:00',
                'thursday' => '09:00 - 18:00',
                'friday' => '09:00 - 18:00',
                'saturday' => '10:00 - 17:00',
                'sunday' => 'Closed',
            ]),
            'latitude' => fake()->latitude(10, 20),
            'longitude' => fake()->longitude(90, 100),
            'created_at' => fake()->dateTimeBetween('-1 years', 'now'),
        ];
    }
}
