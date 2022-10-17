<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PostStoreRequest extends Request
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
            'title'             => 'required|min:3|max:255|unique:post,title',
            'image'             => 'required|max:2048',
            'body'              => 'required|min:15',
            'category_id'       => 'required|integer',
        ];
    }
}
