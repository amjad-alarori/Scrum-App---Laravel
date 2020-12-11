<?php

namespace App\Rules;

use App\Models\Sprint;
use Illuminate\Contracts\Validation\Rule;

class DuringSprint implements Rule
{
    private $sprint;
    /**
     * Create a new rule instance.
     *
     * @param Sprint $sprint
     */
    public function __construct(Sprint $sprint)
    {
        $this->sprint=$sprint;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if ($value>= $this->sprint->startdate && $value<= $this->sprint->enddate):
            return true;
        else:
            return false;
        endif;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'the chosen date must be between start date '.
            date('d-m-Y',strtotime($this->sprint->startdate)) .
            ' and end date '. date('d-m-Y',strtotime($this->sprint->enddate)) .' of sprint.';
    }
}
