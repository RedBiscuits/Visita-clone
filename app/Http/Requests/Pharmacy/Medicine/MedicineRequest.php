<?php

namespace App\Http\Requests\Pharmacy\Medicine;

use Illuminate\Foundation\Http\FormRequest;

class MedicineRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
         if (auth()->guard('pharmacy')->check()) {
            return true;
         }

            return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'ar.title'    => 'required|min:5',
            'en.title'    => 'required|min:5',
            'ar.content'  => 'required|min:5',
            'en.content'  => 'required|min:5',
            'category_id' => 'required|exists:product_categories,id',
            'image'       => ($this->isMethod('post')) ? 'required|' : '' .'image|mimes:png,jpg,jpeg',
            'price'       => 'required|numeric',
        ];
    }
}
