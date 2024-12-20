<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatingSearchPostRequest extends FormRequest
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
            'budget' =>  ["integer", "required"],
            "description" => ['string', "required"],
            'communes' => ['required', 'array'],
            'coloc_gender' => ['required','integer'],
            'availability_date' => ['required', 'date'],
            'appartment_type' => ['required', 'integer']
        ];
    }
}
