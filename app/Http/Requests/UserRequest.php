<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nom' => ['required', 'min:4'],
            'prenom' => ['required', 'min:4'],
            'email' => ['required', 'min:4'],
            'password' => ['required', 'min:4', 'max:12'],
            'address' => ['nullable', 'min:4'],
            'telephone' => ['required','min:10', 'max:10'],
            'statut' => ['min:4', 'nullable'],
            'role' => ['required'],
            'nomUtilisateur' => ['required', 'min:6'],
        ];
    }
}
