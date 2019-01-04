<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationBlog extends FormRequest
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
            'title' => 'required|min:2|max:30',
            'content' => 'required|min:2|max:30',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Tao cần mày đăng đủ tên cho tao',
            'title.min' => '2 ký tự trở lên thằng đần',
            'title.max' => 'Có 30 kí tự thôi viết lằm viết lốn',
            'content.required' => 'Tao cần mày đăng đủ tên cho tao',
            'content.min' => '2 ký tự trở lên thằng đần',
            'content.max' => 'Có 30 kí tự thôi viết lằm viết lốn',

        ];
    }
}
