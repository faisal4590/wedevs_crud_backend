<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditProductRequest extends FormRequest
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
            'title' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric|min:1'
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
            'title.required' => 'Title is required!',
            'title.max' => 'Title can not be more than 255 characters!',
            'description.required' => 'Description is required!',
            'price.required' => 'Price is required!',
            'price.numeric' => 'Price needs to be in numeric format!',
            'price.min' => 'Price needs to be a positive number(Greater than 0)!'
        ];
    }
}
