<?php

namespace App\Http\Requests\Lab\Rays;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class RaysRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
         if (Auth::guard('lab')->check()) {

            return true;

         }else{

            return false;

         }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'en.title'      => 'required|min:5',
            'ar.title'      => 'required|min:5',
            'category_id'   => 'required|numeric',
            'price'         => 'required|numeric',
         ];
    }
}
