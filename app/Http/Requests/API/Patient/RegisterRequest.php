<?php

namespace App\Http\Requests\API\Patient;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
        $rules= [
            'email' => "required|email|unique:patients",
            'password' => 'required|min:8',
            'password_confirm' => 'required|same:password',
            'name_en'  => 'required',
            'name_ar'  => 'required',
            'mobile'  => "required|numeric|unique:patients",
            'date_of_birth' => 'required|date',
            'gender' => 'required',
        ];

        if ($this->hasfile('image')) {
            $rules += [
                'image'    => ['sometimes', 'nullable', 'image', 'mimes:jpg,jpeg,png'],
            ];
        } 
        return $rules;
    }
}
