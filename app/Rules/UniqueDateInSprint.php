<?php

namespace App\Rules;

use App\Models\Sprint;
use Illuminate\Contracts\Validation\Rule;

class UniqueDateInSprint implements Rule
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
        $dateCount =  $this->sprint->dailyStandUp()->where('stand_up_date','=',$value)->count();

        if($dateCount==0):
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
        return 'A daily stand-up has already been found for this day.';
    }
}
