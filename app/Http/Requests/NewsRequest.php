<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
            'news.store' => [
                'title_uz'        => 'required|string',
                'title_oz'        => 'nullable|string',
                'image'           => 'nullable|image|mimes:jpeg,png,svg,jpg,gif|max:5048',
                'description_uz'  => 'nullable|string',
                'description_oz'  => 'nullable|string',
                'body_uz'         => 'nullable|string',
                'body_oz'         => 'nullable|string',
                'dateTime'        => 'nullable',
            ],
            'news.update' => [
                'title_uz'        => 'required|string',
                'title_oz'        => 'nullable|string',
                'image'           => 'nullable|image|mimes:jpeg,png,svg,jpg,gif|max:5048',
                'description_uz'  => 'nullable|string',
                'description_oz'  => 'nullable|string',
                'body_uz'         => 'nullable|string',
                'body_oz'         => 'nullable|string',
                'dateTime'        => 'nullable',
            ]
        ];

        return $rules[$this->route()->getName()];
    }

    public function messages()
    {
        return [
            'title_uz.required' => 'Сарлавҳаси майдон тўдириш мажбурий',
//            'image' => 'Сарлавҳаси майдон тўдириш мажбурий',
        ];
    }
}
