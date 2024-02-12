<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatingHousingPostRequest extends FormRequest
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
            'rent' => ['integer','required'],
            'security_deposit' => ["integer"],
            'description' => ['required','string'],
            'roommate_gender' => ['required','string'],
            'is_furnished' => ["boolean"]
        ];
    }
}
