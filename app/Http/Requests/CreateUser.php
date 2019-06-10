<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUser extends FormRequest
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
            'lastname' => 'required',
            'firstname' => 'required',
            'lastname_kana' => 'required',
            'firstname_kana' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'password' => 'required',
            'zip31' => 'required',
            'zip32' => 'required',
            'pref31' => 'required',
            'addr31' => 'required',
        ];
    }
}
