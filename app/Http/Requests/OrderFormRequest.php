<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class OrderFormRequest extends Request
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
            'customerID' => 'required',
            'tableno'=> 'required|min:1',
            'coffee1'=> 'required|min:1',
            'coffee2'=> 'required|min:1',
            'coffee3'=> 'required|min:1',
            'coffee4'=> 'required|min:1',
            'coffee5'=> 'required|min:1',
            'pastry1'=> 'required|min:1',
            'pastry2'=> 'required|min:1',
            'pastry3'=> 'required|min:1',
            'pastry4'=> 'required|min:1',
            'pastry5'=> 'required|min:1',
        ];
    }
}
