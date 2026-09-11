<?php

namespace Database\Factories;

use App\Models\event;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends Factory<event>
 */
class EventFactory extends Factory
{
    protected static ?string $password;
    public function definition(): array
    {
        return [
            'event_name'       => $this->faker->sentence(3),
            'event_about_text' => $this->faker->paragraph(2),
            'poster_path'      => 'assets/poster1.jpg',
            'event_status'     => $this->faker->randomElement(['done', 'ongoing']),
        ];
    }

    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
