<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocumentRequest extends FormRequest
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
            'documents.store' => [
                'name_uz'   => 'required|string',
                'name_oz'   => 'nullable|string',
                'file'  => 'required|mimes:doc,docx,csv,txt,xlx,xls,pdf,ppt|max:51200',
            ],
            'documents.update' => [
                'name_uz'   => 'required|string',
                'name_oz'   => 'nullable|string',
                'file'  => 'nullable|mimes:doc,docx,csv,txt,xlx,xls,pdf,ppt|max:51200',
            ]
        ];
        return $rules[$this->route()->getName()];
    }

    public function messages()
    {
        return [
            'name_uz.required' => 'Майдон толдириш мажбурий',
            'file.required' =>  'Филе юкланг',
        ];
    }
}
