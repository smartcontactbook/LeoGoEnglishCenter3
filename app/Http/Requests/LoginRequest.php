<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'txt_email' => 'required',
            'txt_password' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'txt_email.required' => 'Vui lòng nhập email',
            'txt_password.required' => 'Vui lòng nhập password'
        ];
    }
}
