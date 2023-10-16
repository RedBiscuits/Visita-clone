<?php

namespace App\Http\Requests\Dashboard\Offer;

use Illuminate\Foundation\Http\FormRequest;

class OfferRequest extends FormRequest
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
            'en.*'      => 'required|min:5',
            'ar.*'      => 'required|min:5',
            'doctor_id' => 'required|exists:doctors,id',
            'image'     => ($this->isMethod('post')) ? 'required|' : '' .'image|mimes:png,jpg,jpeg',
            'discount'  => 'required|numeric',
        ];
    }
}
