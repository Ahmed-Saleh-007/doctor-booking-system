<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
            'sitename_en' 		    => 'required',
			'sitename_ar' 		    => 'required',
			'email' 			    => 'sometimes|nullable|email',
			'logo' 				    => 'image|mimes:jpg,jpeg,png',
			'icon' 				    => 'image|mimes:jpg,jpeg,png',
			'description' 		    => 'sometimes|nullable',
			'keywords' 			    => 'sometimes|nullable',
			'main_lang' 		    => 'required',
			'status' 			    => 'required',
			'maintenance_message'   => 'sometimes|nullable',
        ];
    }
}
