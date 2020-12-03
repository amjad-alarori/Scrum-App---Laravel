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
            $table->text('description');
            $table->text('priority');
            $table->integer('business_value');
            $table->text('user_story');
            $table->integer('story_points');
            $table->text('acceptance_criteria');
            $table->foreignId('ProjectId')->constrained('projects');
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
        Schema::dropIfExists('product_backlogs');
    }
}
