<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TaxRequest extends Request
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

        $input['name']                  = ucfirst($input['name']);
        $input['rate']                  = str_replace([' %', ','], '', $input['rate']);

        $this->replace($input);

        return [
            'name'                  => 'required|min:3',
            'rate'                  => 'required|between:0,9999.99',
        ];
    }
}
