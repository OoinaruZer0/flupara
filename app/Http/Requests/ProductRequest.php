<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'product_image' => 'required|file|image|mimes:jpeg,png,jpg,gif|max:2048',
            'product_name' => 'required',
            'product_description' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'unit_id' => 'required',
        ];
    }
}
