<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStandUpAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stand_up_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('question_id')->constrained('stand_up_questions')
                ->onDelete('restrict')->onUpdate('restrict');
            $table->foreignId('user_id')->constrained('users')
                ->onDelete('restrict')->onUpdate('restrict');
            $table->mediumText('answer');
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
        Schema::dropIfExists('stand_up_answers');
    }
}
