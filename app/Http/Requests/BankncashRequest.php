<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class BankncashRequest extends Request
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

        $input['apartment_id']          = Auth::user()->profile->defaultApartment;
        $input['account']               = ucwords($input['account']);
        $input['description']           = ucwords($input['description']);
        $input['balance']               = str_replace(['₹ ', ','], '', $input['balance']);

        $this->replace($input);

        return [
            'account'                   => 'required|min:3',
            'description'               => 'required|min:3',
        ];
    }
}
