<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\ScrumTeam;
use App\Models\User;
use Illuminate\Database\Seeder;

class ScrumTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = Project::all()->count();
//        $users = User::query()->orderBy('id')->limit($count)->pluck('id');

        ScrumTeam::factory()->count($count)->create(['roleId'=>1]);
        ScrumTeam::factory()->count($count)->create(['roleId'=>2]);
        ScrumTeam::factory()->count($count*3)->create(['roleId'=>3]);
    }
}
