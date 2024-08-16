<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Game;
use App\Models\Team;
use App\Models\Event;
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
    protected $model = Game::class;
    public function definition(): array
    {

        $startDate = $this->faker->dateTimeBetween('-1 year', '+1 year');
        //$startTime = $this->faker->time($format = 'H:i:s', $max = 'now');      // Seeding random time
        $teamIds = Team::pluck('id')->toArray();
        $eventIds = Event::pluck('id')->toArray();

        return [
            'title' => 'Game #',
            'game_date' => $startDate,
            //'game_time' => $startTime,
            'event_id' => $this->faker->randomElement($eventIds),
            //'game_time' => $startTime,
            'teamA_id' => $this->faker->randomElement($teamIds),
            'teamB_id' => $this->faker->randomElement($teamIds),
        ];
    }
}
