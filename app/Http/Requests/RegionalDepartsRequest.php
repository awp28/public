<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegionalDepartsRequest extends FormRequest
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
            'regional-departs.store' => [
                'title_uz'      => 'required|string',
                'title_oz'      => 'nullable|string',
                'fullname_uz'   => 'required|string',
                'fullname_oz'   => 'nullable|string',
                'position_uz'   => 'required|string',
                'position_oz'   => 'nullable|string',
                'address_uz'    => 'required|string',
                'address_oz'    => 'nullable|string',
                'phone'         => 'nullable|string',
                'map_url'       => 'nullable|string',
                'type'       => 'nullable|numeric',
                'image'         => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
            ],
            'regional-departs.update' => [
                'title_uz'      => 'nullable|string',
                'title_oz'      => 'nullable|string',
                'fullname_uz'   => 'nullable|string',
                'fullname_oz'   => 'nullable|string',
                'position_uz'   => 'nullable|string',
                'position_oz'   => 'nullable|string',
                'address_uz'    => 'nullable|string',
                'address_oz'    => 'nullable|string',
                'phone'         => 'nullable|string',
                'map_url'       => 'nullable|string',
                'type'          => 'nullable|numeric',
                'image'         => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
            ]
        ];
        return $rules[$this->route()->getName()];
    }

    public function messages()
    {
        return [
            'title_uz.required' =>  ' Майдон тўдириш мажбурий',
            'fullname_uz.required' => 'Майдон толдириш мажбурий',
            'position_uz.required' => 'Майдон толдириш мажбурий',
            'address_uz.required' => 'Майдон толдириш мажбурий',
            'type.required' => 'Майдон толдириш мажбурий',
        ];
    }
}
