<?php

namespace App\Http\Requests\Dashboard\Lab;

use Illuminate\Foundation\Http\FormRequest;

class LabRequest extends FormRequest
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
        $rules =  [
            'name'     => 'required|min:3',
            'email'    => 'required|email|unique:labs,email,' . $this->segment(4),
            'phone'    => 'required|numeric|unique:labs,phone,' . $this->segment(4),
            'address'  => 'required',
            'image'    => $this->isMethod('POST') ? 'required' : 'nullable' . ",|image",
            'password' => $this->isMethod('POST') ? 'required' : 'nullable' . ",|confirmed",
        ];

        return $rules;
    }
}
