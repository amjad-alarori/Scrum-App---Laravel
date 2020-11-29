<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductbacklogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productbacklogs', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('description');
            $table->text('priority');
            $table->text('business_value');
            $table->text('user_story');
            $table->text('story_points');
            $table->text('acceptance_criteria');
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
        Schema::dropIfExists('productbacklogs');
    }
}
