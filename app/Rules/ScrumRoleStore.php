<?php

namespace App\Rules;

use App\Models\ScrumTeam;
use Illuminate\Contracts\Validation\Rule;

class ScrumRoleStore implements Rule
{
    public $projectId;

    /**
     * Create a new rule instance.
     *
     * @return void
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

        if ($value === 1 || $value === 2):
            $count = ScrumTeam::query()->where(
                ['projectId', '=', $this->projectId],
                ['roleId', '=', $value]
            )->count();

            if ($count === 0):
                return true;
            else:
                return false;
            endif;
        else:
            return true;
        endif;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'This role exists.';
    }
}
