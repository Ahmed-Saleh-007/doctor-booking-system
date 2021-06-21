<?php

namespace App\Http\Controllers\API\Patient;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class PatientProfileController extends Controller
{
    public function update(Request $request, $id)
    {
        if($request->file('image'))
        {
            $pic_name = time().$request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs(
                'patients',$pic_name
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
            $patient->image = $pic_name;
        }
        $patient->save();    
        return response()->json([
            "success" => "Patient updated successfully",
            "status" => 200,
            "user" => $patient,
        ], Response::HTTP_OK);
    }
}
