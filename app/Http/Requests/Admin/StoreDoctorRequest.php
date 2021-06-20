<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreDoctorRequest extends FormRequest
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
        $rules = [
            'name_en'  => 'required',
            'name_ar'  => 'required',
            'password' => ['required', 'min:8'],
            'deg_id'   => 'required',
            'spec_id'  => 'required',
            'image'    => ['sometimes', 'nullable', 'image', 'mimes:jpg,jpeg,png'],
            'age'      => 'nullable|numeric|min:26|max:80',
            'mobile'   => 'nullable|numeric|min:6',
            'gender'   =>  'required',
        ];
        //make the [email,password] required in the create only
        if ($this->getMethod() == 'POST') {
            $rules += ['email'    => 'required|email|unique:doctors',
                'password' => 'required|min:8'
            ];
        } else {
            $rules += ['email'    => 'required|email|unique:doctors,email,'.$this->doctor->id,
                'password' => 'sometimes|nullable|min:8',
            ];
        }

        return $rules;
    }
}
