<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VideoRequest extends FormRequest
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
            'videos.store' => [
                'title_uz'       => 'required',
                'title_oz'       => 'nullable',
                'video'       => 'required | mimes:mp4,x-flv,x-mpegURL,MP2T,3gpp,quicktime,x-msvideo,x-ms-wmv |max:9000000',
            ],
            'videos.update' => [
                'title_uz'       => 'required',
                'title_oz'       => 'nullable',
                'video'       => 'nullable | mimes:mp4,x-flv,x-mpegURL,MP2T,3gpp,quicktime,x-msvideo,x-ms-wmv |max:9000000',
            ]
        ];

        return $rules[$this->route()->getName()];
    }

    public function messages()
    {
        return [
            'title_uz.required' => 'Майдон толдириш мажбурий',
            'video.required' =>  ' Майдон тўдириш мажбурий',
        ];
    }
}
