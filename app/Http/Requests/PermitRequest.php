<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PermitRequest extends FormRequest
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
            'location' => 'required|max:255',
            'desc' => 'required|max:255',
            'type' => 'required',
               
        ];
    }

    public function messages()
    {
        return [
            'location.required' => 'رجاء ادخال مكان العمل',
            'desc.required' => 'رجاء ادخال وصف العمل',
            'type.required' => 'رجاء ادخال  نوع التصريح',
        ];
    }
}
