<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ManagementRequest extends FormRequest
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
            'management.store' => [
                'name_uz'       => 'required',
                'name_oz'       => 'nullable',
            ],
            'management.update' => [
                'name_uz'       => 'nullable',
                'name_oz'       => 'nullable',
            ]
        ];

        return $rules[$this->route()->getName()];
    }

    public function messages()
    {
        return [
            'name_uz.required' => 'Майдон толдириш мажбурий',
        ];
    }
}
