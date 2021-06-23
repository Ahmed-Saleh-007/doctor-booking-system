<?php

namespace App\Http\Requests\API\Patient;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
            'password_confirm' => ['required', 'same:password'],
            'date_of_birth' => ['required','date'],
            'gender' => 'required',
            
        ];

        if ($this->getMethod() == 'POST') {
            $rules += [
                'email'    => 'required|email|unique:patients',
                'mobile'  => 'required','unique:patients'
            ];
        } 
        else {   //PUT
            $rules += [
                'email'    => 'required|email|unique:patients,id,' . $this->patient->id,
                'mobile'  => 'required','unique:patients,id,'. $this->patient->id
            ];
        }

        if ($this->hasfile('image')) {
            $rules += [
                'image'    => ['sometimes', 'nullable', 'image', 'mimes:jpg,jpeg,png'],
            ];
        }   
        

        return $rules;
    }
}
