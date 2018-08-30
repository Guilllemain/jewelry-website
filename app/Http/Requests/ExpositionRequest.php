<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExpositionRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png',
            'date_start' => 'required|date',
            'date_end' => 'required|date',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Un nom est obligatoire',
            'title.required' => 'Un titre est obligatoire',
            'description.required'  => 'Une description est obligatoire',
            'image.required'  => 'Une image est obligatoire',
            'date_start.required'  => 'Une date de début est obligatoire',
            'date_end.required'  => 'Une date de fin est obligatoire'
        ];
    }
}
