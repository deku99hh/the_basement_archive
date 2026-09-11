<?php

namespace Database\Factories;

use App\Models\Artist;
use App\Models\Event;
use App\Models\Work;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends Factory<Work>
 */
class WorkFactory extends Factory
{
    protected static ?string $password;
    public function definition(): array
    {
        return [
            'work_name'       => $this->faker->words(2, true),
            'work_about_text' => $this->faker->paragraph(2),
            'poster_path'     => 'assets/poster1.jpg',
            'author_id'       => Artist::factory(),
            'event_id'        => Event::factory(),
        ];
    }

    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
