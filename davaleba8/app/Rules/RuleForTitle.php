<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class RuleForTitle implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
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
        for ($i=0; $i < strlen($value); $i++) { 
            if(is_numeric($value[$i]))
                return false;
        }

        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'ციფრები არ შეიძლება!';
    }
}
