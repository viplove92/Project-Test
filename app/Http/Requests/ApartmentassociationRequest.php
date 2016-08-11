<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ApartmentassociationRequest extends Request
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
        return [
            'floorno' => 'required',
            'blockno' => 'required|min:3'
        ];
    }

    /**
     * Assign custom messages to each rule.
     * @return array
     */
    public function messages()
    {
        return [
            'floorno.required'  => 'Please provide a Floor Number',
            'blockno.required'  => 'Please provide a Block / Flat Number',
            'blockno.min'       => 'Please enter Minimum 3 Characters',
        ];
    }
}
