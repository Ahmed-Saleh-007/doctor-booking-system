<?php

namespace App\Http\Requests\SubSpecialist;

use Illuminate\Foundation\Http\FormRequest;

class StoreDepartmentRequest extends FormRequest
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
            'en-name'  => 'required',
            'ar-name'  => 'required',
            'spec_id'  => 'required',
        ];
    }
}