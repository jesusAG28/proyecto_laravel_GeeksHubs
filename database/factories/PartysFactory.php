<?php

namespace Database\Factories;

use App\Models\Game;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Party>
 */
class PartysFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $prefix = ['Ultra', 'Mega', 'Giga', 'Quantum', 'Omni', 'Hyper', 'Electro', 'Aero', 'Techno', 'Astro', 'Infra', 'Nano', 'Bio', 'Synth', 'Chrono'];
        $center = ['Nexus', 'Spectrum', 'Infinity', 'Horizon', 'Pinnacle', 'Fusion', 'Apex', 'Dynamo', 'Zenith', 'Quantum', 'Cosmos', 'Velocity', 'Titan', 'Catalyst', 'Zen'];
        $sufix  = ['Dynamics', 'Synergy', 'Ventures', 'Systems', 'Enterprises', 'Innovations', 'Solutions', 'Labs', 'Global', 'Networks', 'Group', 'Nexus', 'Strategies', 'Technologies', 'Express'];

        $name = fake()->randomElement($prefix) . ' ' .
            fake()->randomElement($center) . ' ' .
            fake()->randomElement($sufix);

        $game = Game::factory()->create();

        return [
            'name' => $name,
            'game_id' => $game->id,
        ];
    }
}
