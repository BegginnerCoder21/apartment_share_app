<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreatingUserRequest extends FormRequest
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
            'firstname' => ['required','string'],
            'lastname' => ['required','string'],
            'login' => ['required','string',Rule::unique(User::class)->ignore($this->id)],
            'gender' => ['required','string'],
            'phone_number' => ['required','string'],
            'dateOfBirth' => ['required','date'],
            'description' => ['string'],
            'password' => ['required','string','confirmed','min:6'],
            'password_confirmation' => ['required','string','min:6']
        ];
    }

    public function messages()
    {
        return [
            'firstname.required' => "Le nom est obligatoire.",
            'lastname.required' => "Le prénom est obligatoire.",
            'login.required' => "Le login est obligatoire.",
            'gender.required' => "Le genre est obligatoire.",
            'phone_number.required' => "Le numéro de telephone est obligatoire.",
            'dateOfBirth.required' => "Le date de naissance est obligatoire.",
            'password.required' => "Le mot de passe est obligatoire.",
            'login.unique' => "Le login saisi existe déjà.",
            'password.min' => "Doit être de minimun 6 caractère.",
            'password_confirmation' => "Doit être minimum 6 caractère."
        ];
    }
}
