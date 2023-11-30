<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $user = User::factory()->create();

        return [
            'name' => fake()->unique()->randomElement([
                "Minecraft",
                "Fortnite",
                "Rocket Leage",
                "Call of Dutty: Black Ops",
                "Mario Kart 8 Deluxe",
                "Garry's Mod",
                "Club Penguin",
                "Hello Kitty Online",
                "PayDay",
                "Dino-D Day",
                "Dead Rising",
                "Goat of Duty",
                "Portal 2",
                "Outlast",
                "Parallax",
                "Overwatch",
                "Counter Stike: Global Offensive",
                "Super Mario Wonder"
            ]),
            'gender' => fake()->unique()->randomElement([
                "Adventure",
                "Action",
                "Platforms",
                "Fighting",
                "Role",
                "Sports",
                "Simulation",
                "Shooter",
                "Strategy",
                "Survival",
                "Puzzle"
            ]),
            'ftp_support' => fake()->randomElement([0, 1]),
            'user_id' => $user->id,
        ];
    }
}
