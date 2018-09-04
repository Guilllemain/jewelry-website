<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
            'name' => 'required|max: 255',
            'email' => 'required|email|max: 170',
            'message' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name' => 'Votre nom est obligatoire',
            'email' => 'Merci de renseigner une adresse email valide',
            'message' => `Merci d'écrire un message d'au moins 10 caractères`,
        ];
    }
}
