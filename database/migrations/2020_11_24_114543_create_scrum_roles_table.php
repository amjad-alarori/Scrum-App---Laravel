<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateScrumRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scrum_roles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
//            $table->timestamps();
        });

        DB::table('scrum_roles')->insert([
            ['title'=> 'Product Owner'],
            ['title'=> 'ScrumMaster'],
            ['title'=> 'Development Team']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scrum_roles');
    }
}
