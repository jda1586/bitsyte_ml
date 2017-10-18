<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'first_name'    =>  'required',
            'last_name'     =>  'required',
            'username'      =>  'required|unique:users,username|regex:/(^[A-Za-z0-9 ]+$)+/',
            'birthday'      =>  'required',
            'email'         =>  'required|email',
            'password'      =>  'required|min:6|confirmed',
            'product_id'    =>  'required|exists:products,uuid'

        ];
    }
}
