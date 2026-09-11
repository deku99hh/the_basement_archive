<?php

namespace Database\Factories;

use App\Models\Artist;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends Factory<Artist>
 */
class ArtistFactory extends Factory
{
    protected static ?string $password;
    public function definition(): array
    {
        return [
            'artist_name'       => $this->faker->name(),
            'username'          => $this->faker->unique()->userName(),
            'artist_about_text' => $this->faker->paragraph(3),
            'email'             => $this->faker->unique()->safeEmail(),
            'password'          => bcrypt('1111'),
            'role'              => 'artist',
        ];
    }

    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
