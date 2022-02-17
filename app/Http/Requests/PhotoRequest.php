<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhotoRequest extends FormRequest
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
        $rules = [
            'photos.store' => [
                'title_uz'        => 'required|string',
                'title_oz'        => 'nullable|string',
                'logo'        => 'required|image|mimes:jpeg,png,jpg,gif|max:5048',
            ],
            'photos.update' => [
                'title_uz'        => 'required|string',
                'title_oz'        => 'nullable|string',
                'logo'        => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
            ]
        ];

        return $rules[$this->route()->getName()];
    }

    public function messages()
    {
        return [
            'title_uz.required' => 'Сарлавҳаси майдон тўдириш мажбурий',
            'logo.required' => 'майдон тўдириш мажбурий',
        ];
    }
}
