<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class validateuser extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username'=>'required',
            'password'=>'required'
        ];
    }

    public function message()
    {
        return [
        'username.required'=>'username harus diisi',
        'password.required'=>'password harus diisi'
        ];
    }
}
