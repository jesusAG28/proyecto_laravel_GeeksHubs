<?php

namespace Database\Factories;

use App\Models\Party;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserPartys>
 */
class UserPartyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $party  = Party::factory()->create();

        return [
            // 'student_id' => $student->id,
            'party_id' => $party->id,
            'owner' => fake()->randomElement([0,1]),
            'active' => fake()->randomElement([0,1])

        ];
    }
}
