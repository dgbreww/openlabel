<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckCardDate implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    private $message;
    public function __construct($message = null)
    {
        //
        $this->message = $message;
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
        
        $date = $value;

        $breakDate = explode('/', $date);

        $month = isset($breakDate[0])? $breakDate[0]:'';
        $year = isset($breakDate[1])? $breakDate[1]:'';

        $newErrors = array();

        $month = trim($month);

        if (!empty($month)) {
            
            $allMonths = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12);

            if (!in_array($month, $allMonths)) {
                $this->message = "Month is incorrect in format";
                return false;
            }

        } else {
            $this->message = "Month cannot be empty";
            return false;
        }

        $year = trim($year);

        if (!empty($year)) {
            
            if (is_numeric($year)) {
                
                if (strlen($year) == 4) {
                    
                    $currentYear = date('Y');

                    if ($year >= $currentYear) {
                        $newErrors = array();
                    } else {
                        $this->message = "Year cannot be past";
                        return false;
                    }

                } else {
                    $this->message = "Year should be 4 digit long";
                    return false;
                }

            } else {
                $this->message = "Year should be numeric";
                return false;
            }

        } else {
            $this->message = "Year should be numeric";
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
        return $this->message;
    }
}
