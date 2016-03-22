<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class WordCreateRequest extends Request
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
            'content' => 'required|unique:words,content',
        ];
    }

    public function messages()
    {
        return [
            'content.required' => trans('word/validations.content_required'),
            'content.unique' => trans('word/validations.content_unique'),
        ];
    }
}
