<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ApartmentRequest extends Request
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

        $input['name']              = ucwords($input['name']);
        $input['address_line1']     = ucwords($input['address_line1']);
        $input['address_line2']     = ucwords($input['address_line2']);
        $input['address_line3']     = ucwords($input['address_line3']);
        $input['city']              = ucwords($input['city']);
        $input['state']             = ucwords($input['state']);
        $input['country']           = ucwords($input['country']);

        $this->replace($input);


        return [
            'name' => 'required|min:2',
            'address_line1'  => 'required',
            'city'  => 'required',
            'state'  => 'required',
            'country'  => 'required',
            'pincode'  => 'required',
        ];
    }

    /**
     * Assign custom messages to each rule.
     * @return array
     */
    public function messages()
    {
        return [
            'name.required'             => 'Apartment Name is required',
            'name.min'                  => 'Apartment Name should contain minimum 3 Characters',
            'address_line1.required'    => 'Address Line 1 is required',
            'city.required'             => 'City is required',
            'state.required'            => 'State is required',
            'country.required'          => 'Country is required',
            'pincode.required'          => 'Pincode is required',
        ];
    }


}
