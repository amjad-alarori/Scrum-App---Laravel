<?php

namespace App\Rules;

use App\Models\Project;
use App\Models\ScrumTeam;
use App\Models\User;
use Illuminate\Contracts\Validation\Rule;

class TeamMemberNotExists implements Rule
{
    public $projectId;

    /**
     * Create a new rule instance.
     *
     * @param $projectId
     */
    public function __construct($projectId)
    {
        $this->projectId = $projectId;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $user = User::query()->where('email', '=', $value)->first();

        if ($user !== null):
            $count = ScrumTeam::query()->where('userId', '=', $user->id)
                ->where('projectId', '=', $this->projectId)->count();

            if ($count === 0):
                return true;
            else:
                return false;
            endif;
        endif;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The selected user is already a member of scrum team.';
    }
}
