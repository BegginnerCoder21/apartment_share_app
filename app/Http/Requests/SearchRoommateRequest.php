<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchRoommateRequest extends FormRequest
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
            'rent' => ['required', 'integer'],
            'is_furnished' => ['required', 'integer'],
            'security_deposit' => ['integer', 'required'],
            'description' => ['required', 'string'],
            'roommate_gender' => ['required', 'integer'],
            'commune' => ['required', 'integer'],
            'image' => ['required', 'image'],
            'housing_type' => ['required', 'integer']
        ];
    }
}
