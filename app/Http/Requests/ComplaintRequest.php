<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ComplaintRequest extends Request
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

        $input['desc']              = ucfirst($input['desc']);

        $this->replace($input);

        return [
            'type'  => 'required',
            'area'  => 'required',
            'desc'  => 'required | min:5',
        ];
    }


    /**
     * Assign custom messages to each rule.
     * @return array
     */
    public function messages()
    {
        return [
            'desc.required' => 'Please provide a brief Description',
            'desc.min' => 'Please provide Minimum 5 Characters for Description',
        ];
    }

}
