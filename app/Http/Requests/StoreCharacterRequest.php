<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCharacterRequest extends FormRequest
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
            'name' => 'required|max:200',
            'description' => 'max:255',
            'strength' => 'required|numeric|min:0|max:15',
            'defence' => 'required|numeric|min:0|max:15',
            'speed' => 'required|numeric|min:0|max:15',
            'intelligence' => 'required|numeric|min:0|max:15',
            'life' => 'required|numeric|min:50|max:150',
            'type_id' => 'required|numeric|'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Questo campo è obbligatorio',
            'strength.required' => 'Questo campo è obbligatorio',
            'defence.required' => 'Questo campo è obbligatorio',
            'speed.required' => 'Questo campo è obbligatorio',
            'intelligence.required' => 'Questo campo è obbligatorio',
            'life.required' => 'Questo campo è obbligatorio',
            'description.max' => 'Il testo inserito è troppo lungo',
            'strength.min' => 'Questo campo non può essere inferiore a 0',
            'defence.min' => 'Questo campo non può essere inferiore a 0',
            'speed.min' => 'Questo campo non può essere inferiore a 0',
            'intelligence.min' => 'Questo campo non può essere inferiore a 0',
            'life.min' => 'Questo campo non può essere inferiore a 50',
            'strength.max' => 'Questo campo non può essere superiore a 15',
            'defence.max' => 'Questo campo non può essere superiore a 15',
            'speed.max' => 'Questo campo non può essere superiore a 15',
            'intelligence.max' => 'Questo campo non può essere superiore a 15',
            'life.max' => 'Questo campo non può essere superiore a 150',
            'type_id.required' => 'Questo campo è obbligatorio',
        ];
    }
}
