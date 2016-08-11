<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StaffRequest extends Request
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

        //  Capitalize before insert
        $input = $this->all();

        $input['staff_name']                = ucwords($input['staff_name']);
        $input['alias']                     = ucwords($input['alias']);
        $input['address']                   = ucwords($input['address']);
        $input['first_ref']                 = ucwords($input['first_ref']);

        $this->replace($input);

        return [
            'staff_name'            => 'required|min:2',
            'address'               => 'required|max:200',
        ];
    }

    /**
     * Assign custom messages to each rule.
     * @return array
     */
    public function messages()
    {
        return [
            'staff_name.required'           => 'Staff Name is required',
            'name.min'                      => 'Staff Name should contain minimum 2 Characters',
            'address.required'              => 'Address is required',
            'address.max'                   => 'Address should contain maximum 200 Characters',
        ];
    }
}
