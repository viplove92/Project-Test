<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductRequest extends Request
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

        $input['name']                  = ucwords($input['name']);
        $input['description']           = ucwords($input['description']);
        $input['sales_price']           = str_replace(['₹ ', ','], '', $input['sales_price']);

        $this->replace($input);

        return [
            'name'                  => 'required|min:3',
            'sales_price'           => 'required|between:0,999999999999.99',
        ];
    }
}
