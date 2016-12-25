<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            //
            'phonenumber_register' => 'required|unique:user,phone_number',
            'password_register' => 'required|min:6',
            'repeatpassword_register' => 'required|same:password',
        ];
    }

    public function messages()
    {
        return [
            'phonenumber_register.required' => 'Bạn chưa nhập số điện thoại',
            'phonenumber_register.unique' => 'Số điện thoại đã được đăng ký',
            'password_register.required' => 'Bạn chưa nhập password',
            'password_register.min' => 'Mật khẩu quá ngắn',
            'repeatpassword_register.required' => 'Nhập lại mật khẩu',
            'repeatpassword_register.same' => 'Mật khẩu không khớp'
        ];
    }
}
