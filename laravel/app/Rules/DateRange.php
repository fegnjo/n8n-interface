<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Carbon;

class DateRange implements Rule
{
    private string $validationMessage = "";

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
    public function passes($attribute, $value): bool
    {
        if (!isset($value[0]) || !isset($value[1])) {
            $this->validationMessage = "Не корректный период!";
            return false;
        }

        if (count($value) !== 2) {
            $this->validationMessage = "Количество элементов в диапазоне должно быть 2!";
            return false;
        }

        $start = Carbon::make($value[0]);
        $end = Carbon::make($value[1]);

        if ($start > $end) {
            $this->validationMessage = "Начало периода не должно быть больше конца периода!";
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
        return $this->validationMessage;
    }
}
