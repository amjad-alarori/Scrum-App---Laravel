<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\ScrumTeam;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

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

        $projectIds = Project::all('id');
        $userIds = User::all('id');

        return [
            'userId' => $this->faker->randomElement($userIds),
            'projectId' => $this->faker->randomElement($projectIds),
            'roleId' => $this->faker->randomElement([1,2,3]),
        ];
    }
}
