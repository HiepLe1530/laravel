<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KhoaHocRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'image'=>'required',
            'title'=>'required',
            'description'=>'required'
        ];
    }

    public function messages(): array
    {
        return [
            'image.required'=>'image bắt buộc nhập',
            'title.required'=>'title bắt buộc nhập',
            'description.required'=>'décription bắt buộc nhập'
        ];
    }
}
