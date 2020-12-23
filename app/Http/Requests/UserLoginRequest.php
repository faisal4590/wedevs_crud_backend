<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserLoginRequest extends FormRequest
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
            'username' => 'required|max:255|string',
            'password' => 'required|min:8',
        ];
    }

    /**
     *  Return specific validation response message.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'username.required' => 'Username is required!',
            'username.max' => 'Username must be less than 255 characters!',
            'password.required' => 'Password is required!',
            'password.min' => 'Password must be minimum 8 characters!',
        ];
    }
}
