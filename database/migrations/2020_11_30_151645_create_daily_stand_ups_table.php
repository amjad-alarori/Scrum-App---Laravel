<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDailyStandUpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_stand_ups', function (Blueprint $table) {
            $table->id();

            $table->text('yesterday');
            $table->text('today');
            $table->text('challenge');
            $table->timestamps();

            $table->foreignId('sprint_id')->constrained('sprints');
            $table->foreignId('user_id')->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daily_stand_ups');
    }
}
