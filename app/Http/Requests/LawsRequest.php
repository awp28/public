<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LawsRequest extends FormRequest
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
            'laws.store' => [
                'title_uz'     => 'required',
                'title_oz'     => 'nullable',
                'type'         => 'required',
                'url'          => 'nullable',
            ],
            'laws.update' => [
                'title_uz'     => 'nullable',
                'title_oz'     => 'nullable',
                'type'         => 'nullable',
                'url'          => 'nullable',
            ]
        ];

        return $rules[$this->route()->getName()];
    }

    public function messages()
    {
        return [
            'title_uz.required' => 'Майдон толдириш мажбурий',
            'type.required' => 'Маълумот турини танланг',
        ];
    }
}
