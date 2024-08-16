<?php

namespace Database\Seeders;
use Faker\Factory as Faker;


use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Event;
use App\Models\Team;
use App\Models\Game;
use App\Models\Player;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Event::factory()->count(30)->create();
        Team::factory()->count(32)->create();
        //Game::factory()->count(3)->create();
        // User::factory()->count(1)->create();
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('1234.1234'),
            'is_admin' => true,
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'test',
            'email' => 'test@test.com',
            'email_verified_at' => now(),
            'password' => bcrypt('1234.1234'),
            'is_admin' => false,
            'remember_token' => Str::random(10),
        ]);
        //Player::factory()->count(10)->create();
    }
}

// User::factory(10)->create();

// User::factory()->create([
//     'name' => 'Test User',
//     'email' => 'test@example.com',
// ]);