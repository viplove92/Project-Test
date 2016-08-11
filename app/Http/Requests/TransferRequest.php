<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TransferRequest extends Request
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

        $input['amount']                = str_replace(['₹ ', ','], '', $input['amount']);

        $this->replace($input);

        return [
            'description'           => 'required|min:3',
            'amount'                => 'required|between:0,999999999999.99',
            'from_account'          => 'required',
            'to_account'            => 'required|different:from_account'
        ];
    }
}
