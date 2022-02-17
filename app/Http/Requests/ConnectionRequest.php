<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConnectionRequest extends FormRequest
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
            'connect' => [
                'fullname'   => 'required|string',
                'email'      => 'required|email',
                'phone'      => 'required|string',
                'message'    => 'required|string',
            ],
        ];
        return $rules[$this->route()->getName()];
    }
}
