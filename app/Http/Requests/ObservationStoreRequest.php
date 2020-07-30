<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ObservationStoreRequest extends FormRequest
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
            
            'desc' => 'required|max:255',
            'category' => 'required',
            'responsible_area' => 'required',
            'responsible_correction' => 'required'
               
        ];
    }

    public function messages()
    {
        return [
            'category.required' => 'رجاء ادخال التصنيف',
            'desc.required' => 'رجاء ادخال الوصف',
            'responsible_area.required' => 'رجاء ادخال الادارة التي في نطاقها الملاحظة',
            'responsible_correction.required' => ' رجاء ادخال الادارة المسئولة عن التنفيذ',
        ];
    }
}
