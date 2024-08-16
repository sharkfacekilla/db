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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('seed')->nullable();
            $table->foreignId('event_id')->nullable()->constrained('events')->onDelete('cascade');
            $table->string('coach')->nullable();
            $table->string('manager')->nullable();
            $table->string('logo')->nullable();
            $table->integer('rank')->nullable();
            $table->double('wins')->default(0);
            $table->double('losses')->default(0);
            $table->double('game_played')->default(0);
            $table->double('points_for')->nullable();
            $table->double('points_against')->nullable();
            $table->boolean('winner')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
