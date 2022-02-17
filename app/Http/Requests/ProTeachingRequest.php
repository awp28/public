<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProTeachingRequest extends FormRequest
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
            'professional-teaching.store' => [
                'logo'        => 'nullable|image|mimes:jpeg,png,svg,jpg,gif|max:5048',
                'name_center_uz'       => 'required',
                'name_center_oz'       => 'nullable',
                'full_name_uz'       => 'required',
                'full_name_oz'       => 'nullable',
                'phone'       => 'required',
                'destination_uz'       => 'required',
                'destination_oz'       => 'nullable',
            ],
            'professional-teaching.update' => [
                'logo'        => 'nullable|image|mimes:jpeg,png,svg,jpg,gif|max:5048',
                'name_center_uz'       => 'required',
                'name_center_oz'       => 'nullable',
                'full_name_uz'       => 'nullable',
                'full_name_oz'       => 'nullable',
                'phone'       => 'required',
                'destination_uz'       => 'required',
                'destination_oz'       => 'nullable',
            ]
        ];

        return $rules[$this->route()->getName()];
    }

    public function messages()
    {
        return [
            'logo.required' =>  ' Майдон тўдириш мажбурий',
            'name_center_uz.required' => 'Майдон толдириш мажбурий',
            'full_name_uz.required' => 'Майдон толдириш мажбурий',
            'phone.required' => 'Майдон толдириш мажбурий',
            'destination_uz.required' => 'Майдон толдириш мажбурий',
        ];
    }
}



