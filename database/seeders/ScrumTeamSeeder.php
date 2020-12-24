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
        $users = User::query()->orderBy('id')->pluck('id', 'id')->toArray();
        $t = 0;

        foreach ($projects as $project):
            $t++;
            $teamMembers = [];

            for ($l = 1; $l < 6; $l++):
                $role = $l < 3 ? $l : 3;
                $userId = $faker->randomElement($users);

                ScrumTeam::factory()->create([
                    'roleId' => $role,
                    'userId' => $userId,
                    'projectId' => $project->id
                ]);

                $teamMembers[strval($userId)] = $userId;
                unset($users[strval($userId)]);

            endfor;

            $users = $users+ $teamMembers;
        endforeach;
    }
}
