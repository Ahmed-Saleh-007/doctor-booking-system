<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreDoctorDegreeRequest extends FormRequest
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
            'name_en'         => ['required', 'unique:doctor_degrees'],
            'name_ar'         => ['required', 'unique:doctor_degrees'],
            'description'     => ['required', 'min:15','max:255'],
        ];
    }
}
