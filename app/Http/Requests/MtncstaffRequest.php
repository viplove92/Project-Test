<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class MtncstaffRequest extends Request
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
            'first_name' => 'required|min:3',
            'last_name'  => 'required|min:3',
            'address_1'  => 'required',
            'address_2'  => 'required',
            'address_3'  => 'required',
            'company_name'  => 'required',
            'photo'  => 'required',
            'uida'  => 'required',

        ];
    }
}
