<?php

namespace App\Http\Requests\Main;

use Illuminate\Foundation\Http\FormRequest;

class StatRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'start_date' => 'date',
            'end_date' => 'date|after_or_equal:start_date'
        ];
    }
}
