<?php

namespace App\Http\Requests\Doctor;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDoctorRequest extends FormRequest
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
            'name_en'  => 'required',
            'name_ar'  => 'required',
            'email'    => ['required', 'email', 'unique:admins'],
            'password' => ['required', 'min:8'],
            'image'    => ['sometimes', 'nullable', 'image', 'mimes:jpg,jpeg,png'],
            'deg_id'   => 'required',
            'spec_id'  => 'required',
        ];
    }
}