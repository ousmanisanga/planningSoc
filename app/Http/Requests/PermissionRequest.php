<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PermissionRequest extends FormRequest
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
            'objet' => ['required', 'min:6'],
            'motif' => ['required', 'min:6'],
            'dateDepart' => ['required'],
            'dateFin' => ['required'],
            'user_id',
            'heureDepart' => ['required'],
            'heureFin' => ['required'],
            'superviseur' => ['required']
        ];
    }
}
