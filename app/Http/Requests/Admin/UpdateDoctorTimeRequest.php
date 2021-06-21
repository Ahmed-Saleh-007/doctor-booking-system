<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDoctorTimeRequest extends FormRequest
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
            'day'                  => 'required|in:FRIDAY,MONDAY,SATURDAY,SUNDAY,THURSDAY,TUESDAY,WEDNESDAY',
            'from'                 => 'required|date_format:H:i|before_or_equal:to',
            'to'                   => 'required|date_format:H:i|after_or_equal:from',
            'session_number'       => ['required', 'numeric'],
            'fees'                 => ['required', 'numeric'],
            'doctor_id'            => ['required', 'numeric'],
            'doctor_address_id'    => ['required', 'numeric'],
        ];
    }
}
