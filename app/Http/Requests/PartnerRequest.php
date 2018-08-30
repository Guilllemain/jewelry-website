<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartnerRequest extends FormRequest
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
            'logo' => 'image|mimes:jpeg,jpg,png',
            'video_local' => 'file|mimetypes:video/avi,video/mpeg,video/mp4',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Un nom est obligatoire',
            'title.required'  => 'Un titre est obligatoire',
            'description.required'  => 'Une description est obligatoire',
        ];
    }
}
