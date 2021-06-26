<?php

namespace App\Http\Controllers\Doctor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function redirect_to_google() 
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback_from_google() 
    {
        $doctor = Socialite::driver('google')->stateless()->user();
        $newUser = Doctor::where('email', $doctor->email)->first();
        if(!$newUser) {
            $newUser = Doctor::create([
                'name_en'     => $doctor->name,
                'email'    => $doctor->email,
                'password' => Hash::make(123456),
            ]);
            doctor()->login($newUser, true);
            return redirect()->route('doctor.dashboard');
            
        }else{

            doctor()->login($newUser, true);
            return redirect()->route('doctor.dashboard');

        }
    }
}
