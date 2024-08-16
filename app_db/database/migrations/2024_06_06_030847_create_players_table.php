php<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Author: Yeonwha
     * 10-07-2024 Changes
     * - Gage
     * - Changed 2pt_FG, 3pt_FG, FT to two_pts, three_pts, and free_throw, had to remove the number to work with 
     * storing correctly, and helps make it more clear :)
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->foreignId('team_id')->constrained('teams')->onDelete('cascade');
            $table->string('position');
            $table->integer('number');
            $table->integer('games_played')->default(0);
            $table->double('minutes_played')->nullable();
            $table->double('two_pts')->nullable();
            $table->double('three_pts')->nullable();
            $table->double('free_throw')->nullable();
            $table->double('rebounds')->nullable();
            $table->double('steals')->nullable();
            $table->double('turnovers')->nullable();
            $table->double('assists')->nullable();
            $table->double('blocks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
