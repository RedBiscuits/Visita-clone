<?php

namespace App\Http\Requests\Dashboard\Pharmacy;

use Illuminate\Foundation\Http\FormRequest;

class PharmacyRequest extends FormRequest
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
            'email'    => 'required|email|unique:pharmacies,email,' . $this->segment(4),
            'phone'    => 'required|numeric|unique:pharmacies,phone,' . $this->segment(4),
            'address'  => 'required',
            'image'    => $this->isMethod('POST') ? 'required' : 'nullable' . ",|image",
            'password' => $this->isMethod('POST') ? 'required' : 'nullable' . ",|confirmed",
        ];

        return $rules;
    }
}
