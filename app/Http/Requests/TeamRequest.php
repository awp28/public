<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
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
            'teams.store' => [
                'fullname_uz'   => 'required|string',
                'fullname_oz'   => 'nullable|string',
                'department_uz' => 'required|string',
                'department_oz' => 'nullable|string',
                'position_uz'   => 'required|string',
                'position_oz'   => 'nullable|string',
                'phone'         => 'required|string',
                'biography_uz'  => 'nullable|string',
                'biography_oz'  => 'nullable|string',
                'reception_days_uz'  => 'nullable|string',
                'reception_days_oz'  => 'nullable|string',
                'image'         => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
            ],
            'teams.update' => [
                'fullname_uz'   => 'required|string',
                'fullname_oz'   => 'nullable|string',
                'department_uz' => 'required|string',
                'department_oz' => 'nullable|string',
                'position_uz'   => 'required|string',
                'position_oz'   => 'nullable|string',
                'phone'         => 'required|string',
                'biography_uz'  => 'nullable|string',
                'biography_oz'  => 'nullable|string',
                'reception_days_uz'  => 'nullable|string',
                'reception_days_oz'  => 'nullable|string',
                'image'         => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
            ]
        ];
        return $rules[$this->route()->getName()];
    }
}
