<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductBacklogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_backlogs', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('description')->nullable();
            $table->integer('priority');
            $table->integer('business_value');
            $table->text('user_story')->nullable();
            $table->integer('story_points');
<<<<<<< HEAD
            $table->text('acceptance_criteria');
            $table->unsignedBigInteger('project_id');
            $table->unsignedBigInteger('sprint_id')->nullable();
            $table->foreign('project_id')->references('id')->on('projects');
=======
            $table->text('acceptance_criteria')->nullable();
            $table->foreignId('project_id')->constrained();
>>>>>>> 210c2cd295e8347258abf78ab956114fe975e520
            $table->timestamps();

            $table->text('mission')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_backlogs');
    }
}
