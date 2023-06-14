<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {
        return [
            'email'=>'required|email:filter',
            'password'=>'required|min:4'
        ];
    }

    public function messages()
    {
        return [
            'email.required'=>'Trường email bắt buộc phải nhập',
            'email.email'=>'email ko đúng định dạng',
            'password.required'=>'Trường password bắt buộc phải nhập',
            'password.min'=>'Trường password phải lớn hơn 4 ký tự'
        ];
    }
}
