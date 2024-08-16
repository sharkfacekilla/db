<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('status');
            $table->string('preA')->nullable();
            $table->string('preB')->nullable();
            $table->timestamp('game_date');
            $table->foreignId('event_id')->constrained('events')->onDelete('cascade');
            $table->foreignId('teamA_id')->nullable();
            $table->foreignId('teamB_id')->nullable();
            $table->integer('round')->nullable();
            $table->integer('teamA_score1')->nullable();
            $table->integer('teamA_score2')->nullable();
            $table->integer('teamA_score3')->nullable();
            $table->integer('teamA_score4')->nullable();
            $table->integer('teamB_score1')->nullable();
            $table->integer('teamB_score2')->nullable();
            $table->integer('teamB_score3')->nullable();
            $table->integer('teamB_score4')->nullable();
            $table->string('teamA_wl')->nullable();
            $table->string('teamB_wl')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
