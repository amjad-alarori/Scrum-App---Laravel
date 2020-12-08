<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\ScrumRole;
use App\Models\ScrumTeam;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class ScrumTeamFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ScrumTeam::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $projectIds = DB::table('projects')
            ->join('scrum_teams', 'projects.id','=','scrum_teams.projectId')
            ->where('scrum_teams.roleId', '<>', 1)->get('projects.id');

        if (count($projectIds) > 0):
            $roleId = 1;
        else:
            $projectIds =  DB::table('projects')
                ->leftJoin('scrum_teams', 'projects.id','=','scrum_teams.projectId')
                ->where('scrum_teams.roleId', '<>', 2)->get('projects.id');
            if (count($projectIds) > 0):
                $roleId = 2;
            else:
                $projectIds = Project::all('id');
                $roleId = 3;
            endif;
        endif;

        $userIds = User::all('id');


        return [
            'userId' => $this->faker->randomElement($userIds),
            'projectId' => $this->faker->randomElement($projectIds),
            'roleId' => $roleId,
        ];
    }
}
