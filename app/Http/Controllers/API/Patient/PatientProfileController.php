<?php

namespace App\Http\Controllers\API\Patient;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\API\Patient\UpdateProfileRequest;
use Illuminate\Validation\ValidationException;

class PatientProfileController extends Controller
{
    public function update(Request $request, $id)
    {
        $rules = [
            'email' => "required|email|unique:patients,email,$id",
            'password' => 'required|min:8',
            'password_confirm' => 'required|same:password',
            'name_en'  => 'required',
            'name_ar'  => 'required',
            'mobile'  => "required|numeric|unique:patients,mobile,$id",
            'date_of_birth' => 'required|date',
            'gender' => 'required',
        ];

        if ($request->hasfile('image')) {
            $rules += [
                'image'    => ['sometimes', 'nullable', 'image', 'mimes:jpg,jpeg,png'],
            ];
        }

        $request->validate($rules);

        if($request->file('image'))
        {
            $pic_name = time().$request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs(
                'images/patients',$pic_name
            );
        }

        $patient = Patient::find($id);

        $patient->name_en = $request->input('name_en');

        $patient->name_ar = $request->input('name_ar');

        $patient->email = $request->input('email');

        $patient->password = Hash::make($request->input('password'));

        $patient->mobile = $request->input('mobile');

        $patient->date_of_birth = $request->input('date_of_birth');

        $patient->gender = $request->input('gender');
        if($request->file('image'))
        {
            if ($patient->image != 'images/patients/default.png' && $patient->image != NULL ) {
                file_exists(storage_path('app/public/'.$patient->image)) ? unlink(storage_path('app/public/'.$patient->image)) : '';
            }
            $patient->image = 'images/patients/' . $pic_name;
        }
        if($patient->save())
        {
            return response()->json([
                "message" => "Patient updated successfully",
                "status" => 200,
                "user" => $patient,
            ], Response::HTTP_OK);
        }
        else
        {
            return response()->json([
                "message" => "Patient fail to update",
                "status" => 400,
            ], Response::HTTP_BAD_REQUEST);
        }

    }
}
