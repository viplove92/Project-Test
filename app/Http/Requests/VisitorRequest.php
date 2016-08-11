<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class VisitorRequest extends Request
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

        $input = $this->all();

        $input['first_name']    = ucwords($input['first_name']);
        $input['last_name']    = ucwords($input['last_name']);

        $this->replace($input);


        return [
            'first_name' => 'required|min:3',
            'last_name'  => 'required|min:3',
//            'mobile_no'  => 'required|digits:10',

        ];
    }

}
