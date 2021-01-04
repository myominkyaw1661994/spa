<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
            'name' => 'required | string', 
            'price' => 'required | numeric'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Name required",
            'price.required' => "Price required", 
            'name.string' => "Name Must be stirng", 
            'price.numeric' => "Price must be number"
        ];
    }
}
