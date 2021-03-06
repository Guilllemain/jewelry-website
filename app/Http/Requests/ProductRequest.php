<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required|max:255',
            'features' => 'required',
            'description' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,jpg,png',
            'product_img' => 'required',
            'product_img.*' => 'image|mimes:jpeg,jpg,png'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Un nom est obligatoire',
            'features.required'  => 'Des caractéristiques sont obligatoires',
            'description.required'  => 'Une description est obligatoire',
            'thumbnail.required'  => 'Une vignette est obligatoire au format JPG ou PNG',
            'product_img.required'  => 'Une image minimum est obligatoire au format JPg ou PNG',
        ];
    }
}
