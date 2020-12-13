<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStandUpQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stand_up_questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('stand_up_id')->constrained('daily_stand_ups')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->string('question');
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
        Schema::dropIfExists('stand_up_questions');
    }
}
