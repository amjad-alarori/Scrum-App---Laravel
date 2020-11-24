<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScrumTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scrum_teams', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('userId')->constrained('users')->onDelete('restrict')->onUpdate('restrict');
            $table->foreignId('projectId')->constrained('projects')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('roleId')->constrained('scrum_roles')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scrum_teams');
    }
}
