<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class AssetRequest extends Request
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
        $input['display_name']          = ucwords($input['display_name']);
        $input['brand_name']            = ucwords($input['brand_name']);
        $input['model_name']            = ucwords($input['model_name']);
        $input['price']                 = str_replace(['₹ ', ','], '', $input['price']);

        $this->replace($input);

        return [
            'display_name'              => 'required|min:3',
            'price'                     => 'required|between:0,999999999999.99',
        ];
    }
}
