<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookRequest extends FormRequest
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
            'doctor_id'   => 'required|numeric',
            'address_id'  => 'required|numeric',
            'patient_id'  => ['required', 'numeric'],
            'day'         => 'required|in:FRIDAY,MONDAY,SATURDAY,SUNDAY,THURSDAY,TUESDAY,WEDNESDAY',
            'fees'        => ['required', 'numeric'],
            'confirm'     => ['sometimes', 'nullable'],
            'date'        => ['required', 'date'],
            'time'        => 'required|date_format:H:i',
        ];
    }
}
