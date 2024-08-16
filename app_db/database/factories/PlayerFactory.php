<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Player;
use App\Models\Team;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Player>
 */
class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $teamIds = Team::pluck('id')->toArray();
        return [
            //
            'first_name' => $this->faker->unique()->sentence(1),
            'last_name' => $this->faker->unique()->sentence(1),
            'team_id' => $this->faker->randomElement($teamIds),
            'position' => 'Player', 
            'number' => $this->faker->unique()->numberBetween(1, 50),
        ];
    }
}
