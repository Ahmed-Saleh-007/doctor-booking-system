<?php

namespace App\Http\Controllers\API\Patient;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\API\Patient\LoginRequest;
use App\Http\Requests\API\Patient\RegisterRequest;

class PatientAuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        if($request->file('image'))
        {
            $pic_name = time().$request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs(
                'patients',$pic_name
            );
        }
        
        $patient = new Patient();
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
        if($patient->save())
        {
            return response()->json([
                "success" => "Patient registered successfully",
                "status" => 201,
                "user" => $patient,
            ], Response::HTTP_CREATED);
        }
        else
        {
            return response()->json([
                "fail" => "Patient failed to register",
                "status" => 400,
            ], Response::HTTP_BAD_REQUEST);
        }
        

        
    }


    public function login(LoginRequest $request)
    {
        
        $patient = Patient::where('email', $request->email)->first();
        if (!$patient || !Hash::check($request->password, $patient->password)) {
            return response()->json([
                    "error" => "Invalid credentials",
                    ],Response::HTTP_UNAUTHORIZED);
        }
        
        $token = $patient->createToken('token')->plainTextToken;
        
        $cookie = cookie('jwt',$token,60*24, null, null, false, false);

        return response()->json([
            "jwt" => $token,
            ])->withCookie($cookie);
    }

    public function getLogin(Request $request)
    {
        return $request->user();
    }

    public function patientUser(Request $request)
    {
        if (Auth::check()) {
            return $request->user();
        }else {
            return response()->json([
                "error" => "Not authenticated",
                ],Response::HTTP_UNAUTHORIZED);
        }
        
    }


    public function logout()
    {
        $cookie= Cookie::forget('jwt');

        return response()->json([
            "message" => 'Logout successfully',
            ])->withCookie($cookie);
    }
}
