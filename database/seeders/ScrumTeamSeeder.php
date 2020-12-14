<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\ScrumTeam;
use App\Models\User;
use Faker\Factory;
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
        $factory = new Factory();
        $faker = $factory->create();

        $projects = Project::all();

        $users = User::query()->orderBy('id')->limit(count($projects))->pluck('id')->toArray();
        foreach ($projects as $project):
            ScrumTeam::factory()->create([
                'roleId' => 1,
                'userId' => $faker->randomElement($users),
                'projectId'=>$project->id
            ]);
        endforeach;

        $users = User::query()->orderBy('id')->offset(count($projects))->limit(count($projects))->pluck('id')->toArray();
        foreach ($projects as $project):
            ScrumTeam::factory()->create([
                'roleId' => 2,
                'userId' => $faker->randomElement($users),
                'projectId'=>$project->id
            ]);
        endforeach;

        $users = User::query()->orderBy('id')->offset(count($projects))->pluck('id')->toArray();
        foreach ($projects as $project):
            ScrumTeam::factory()->count(3)->create([
                'roleId' => 3,
                'userId' => $faker->randomElement($users),
                'projectId'=>$project->id
            ]);
        endforeach;
    }
}
