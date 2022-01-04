<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GoalDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goal_details', function (Blueprint $table) {
            $table->id();
            $table->string('match_id');
            $table->enum('goal_for', ['home', 'away']);
            $table->enum('goal_type', ['goal', 'penalties', 'own_goal']);
            $table->time('goal_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('goal_details');
    }
}
