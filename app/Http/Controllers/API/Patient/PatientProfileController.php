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
        
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
            'password_confirm' => 'required|same:password',
            'name_en'  => 'required',
            'name_ar'  => 'required',
            'mobile'  => 'required',
            'date_of_birth' => 'required|date',
            'gender' => 'required',
        ]);
          
        
        
        if($request->file('image'))
        {
            $pic_name = time().$request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs(
                'patients',$pic_name
            );
        }

        $patient = Patient::find($id);
        if ($request->filled('name_en'))
            $patient->name_en = $request->input('name_en');
        if ($request->filled('name_ar'))
            $patient->name_ar = $request->input('name_ar');
        if ($request->filled('email'))
            $patient->email = $request->input('email');
        if ($request->filled('password'))
        $patient->password = Hash::make($request->input('password'));
        if ($request->filled('mobile'))
            $patient->mobile = $request->input('mobile');
        if ($request->filled('date_of_birth'))
        $patient->date_of_birth = $request->input('date_of_birth');
        if ($request->filled('gender'))
        $patient->gender = $request->input('gender');
        if($request->file('image'))
        {
            if (!empty($patient->image)) {
                Storage::delete($patient->image);
            }
            $patient->image = $pic_name;
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
