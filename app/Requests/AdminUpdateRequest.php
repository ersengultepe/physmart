<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AdminUpdateRequest extends Request
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
        return [
            'name'                      => 'required|min:3|max:60',
            'surname'                   => 'required|min:2|max:90',
        ];
    }

    public function messages()
    {
        return [
            'name.required'             => 'Adınızı boş bırakmayınız',
            'name.min'                  => 'Adınız en az 3 karakter olmalı',
            'name.max'                  => 'Adınız en fazla 60 karakterolmalı',
            'surname.required'          => 'Soyadınızı boş bırakmayınız',
            'surname.min'               => 'Soyadınız en az 2 karakter olmalı',
            'surname.max'               => 'Soyadınız en fazla 90 karakter olmalı',

        ];
    }
}
