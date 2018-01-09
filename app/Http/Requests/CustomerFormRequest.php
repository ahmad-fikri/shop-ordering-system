<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CustomerFormRequest extends Request
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
            'name' => 'required|min:3',
            'email'=> 'required|min:3',
            'ic'=> 'required|min:10',
            'tel'=> 'required|min:8',
            'address1'=> 'required|min:3',
            'address2'=> 'required|min:3',
            'postcode'=> 'required|min:5',
            'city'=> 'required|min:3',
            'state'=> 'required|min:3',
            'country'=> 'required|min:3',
        ];
    }
}
