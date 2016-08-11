<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class InventoryRequest extends Request
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

        $input['apartment_id']          = Auth::user()->profile->defaultApartment;
        $input['title']                 = ucwords($input['title']);
        $input['model_name']            = ucwords($input['model_name']);
        $input['qty']                   = str_replace(['# ', ','], '', $input['qty']);
        $input['price']                 = str_replace(['₹ ', ','], '', $input['price']);
        $input['sub_total']             = $input['qty'] * $input['price'];
        $input['tax']                   = $input['sub_total'] * '14.5' / '100';
        $input['total']                 = $input['sub_total'] + $input['tax'];

        $this->replace($input);

        return [
//            'description'           => 'required|min:3',
            'price'                 => 'required|between:0,999999999999.99',
        ];
    }
}
