<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCharacterRequest extends FormRequest
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
            'name' => ['required', Rule::unique('characters')->ignore($this->character), 'max:200'],
            'description' => ['nullable', 'max:255'],
            'strength' => ['required', 'numeric', 'min:0', 'max:15'],
            'defense' => ['required', 'numeric', 'min:0', 'max:15'],
            'speed' => ['required', 'numeric', 'min:0', 'max:15'],
            'intelligence' => ['required', 'numeric', 'min:0', 'max:15'],
            'life' => ['required', 'numeric', 'min:50', 'max:150'],
            'type_id' => ['required', 'numeric', Rule::exists('types', 'id')],
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Campo obbligatorio',
            'name.unique' => 'Nome già in uso',
            'strength.required' => 'Campo obbligatorio',
            'defense.required' => 'Campo obbligatorio',
            'speed.required' => 'Campo obbligatorio',
            'intelligence.required' => 'Campo obbligatorio',
            'life.required' => 'Campo obbligatorio',
            'description.max' => 'Il testo inserito è troppo lungo',
            'strength.min' => 'Questo campo non può essere inferiore a 0',
            'defense.min' => 'Questo campo non può essere inferiore a 0',
            'speed.min' => 'Questo campo non può essere inferiore a 0',
            'intelligence.min' => 'Questo campo non può essere inferiore a 0',
            'life.min' => 'Questo campo non può essere inferiore a 50',
            'strength.max' => 'Questo campo non può essere superiore a 15',
            'defense.max' => 'Questo campo non può essere superiore a 15',
            'speed.max' => 'Questo campo non può essere superiore a 15',
            'intelligence.max' => 'Questo campo non può essere superiore a 15',
            'life.max' => 'Questo campo non può essere superiore a 150',
            'type_id.required' => 'Campo obbligatorio',
            'type_id.exists' => 'Questa classe non esiste',
        ];
    }
}
