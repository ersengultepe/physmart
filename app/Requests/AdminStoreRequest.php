<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AdminStoreRequest extends Request
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
            'email'                     => 'required|email|max:150',
            'password'                  => 'required|min:6|max:12',
            'password_confirm'          => 'required|min:6|max:12|same:password'
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
            'email.required'            => 'e-posta adresinizi boş bırakmayınız',
            'email.max'                 => 'eposta adresiniz 150 karakteri aşmamalı',
            'email.email'               => 'e-posta adresiniz hatalı',
            'degree.max'                => 'Unvanınız en fazla 200 karakter olmalı',
            'password.required'         => 'Mevcut şifrenizi boş bırakmayınız',
            'password.min'              => 'Mevcut şifreniz en az 6 karakter olmalı',
            'password.max'              => 'Mevcut şifreniz en fazla 12 karakter olmalı',
            'new_password.required'     => 'Yeni şifrenizi bor bırakmayınız',
            'new_password.min'          => 'Yeni şifreniz en az 6 karakter olmalı',
            'new_password.max'          => 'Yeni şifreniz en fazla 12 karakter olmalı',
            'password_confirm.required' => 'Tekrar şifrenizi boş bırakmayınız',
            'password_confirm.min'      => 'Tekrar şifreniz 6 karakterden küçük olmamalı',
            'password_confirm.max'      => 'Tekrar şifreniz en fazla 12 karakter olmalı',
            'password_confirm.same'     => 'Yeni şifreniz tekrar girdiğiniz şifre ile eşleşmiyor'
        ];
    }
}
