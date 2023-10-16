<?php

namespace App\Http\Requests\Dashboard\Lab;

use Illuminate\Foundation\Http\FormRequest;

class RaysCategoryRequest extends FormRequest
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
            'ar.*' => 'required|min:3',
            'en.*' => 'required|min:3',
         ];
    }
}