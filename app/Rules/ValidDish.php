<?php

namespace App\Rules;

use App\Models\Dish;
use Closure;
use Illuminate\Contracts\Validation\Rule;

class ValidDish implements Rule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        //
    }

    public function passes($attribute, $value)
    {
        if (Dish::find($value)) {
            return true;
        }
        return false;
    }

    public function message()
    {
        return 'Il prodotto non esiste';
    }
}
