<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IncidentRequest extends FormRequest
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
            'nomIncident' => ['required','min:4'],
            'heureIncident' => ['required'],
            'heureRetourNormal' => ['nullable'],
            'observation' => ['required', 'min:4' ],
            'dateIncident' => ['required'],
            'user_id' ,
        ];
    }
}
