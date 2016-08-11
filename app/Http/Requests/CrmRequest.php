<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CrmRequest extends Request
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

        $input['account']               = ucwords($input['account']);
        $input['company']               = ucwords($input['company']);
        $input['address']               = ucwords($input['address']);
        $input['city']                  = ucwords($input['city']);
        $input['state']                 = ucwords($input['state']);
        $input['country']               = ucwords($input['country']);

        $this->replace($input);

        return [
            'account'               => 'required|min:3',
            'company'               => 'required|min:3',
            'city'                  => 'required',
            'state'                 => 'required',
            'country'               => 'required',
        ];
    }

    public function messages()
    {
        return [
            'account.required'              => 'Full Name is required',
            'account.min'                   => 'Full Name should contain minimum 3 Characters',
            'company.required'              => 'Company is required',
            'city.required'                 => 'City is required',
            'state.required'                => 'State is required',
            'country.required'              => 'Country is required',
        ];
    }
}
