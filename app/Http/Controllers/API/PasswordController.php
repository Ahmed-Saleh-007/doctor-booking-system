<?php

namespace App\Http\Controllers\API;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\API\ResetRequest;
use App\Models\Patient;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PasswordController extends Controller
{
    public function forgot(Request $request)
    {
        $email = $request->input('email');

        $token = Str::random(12);

        DB::table('password_resets')->insert([
            'email' => $email,
            'token' => $token,
        ]);

        Mail::send('auth.reset',['token' => $token], function(Message $message) use ($email) {
            $message->subject('Reset your password!');
            $message->to($email);
        });


        return response([
            'message' => 'Check your email'
        ]);

    }

    public function reset(ResetRequest $request)
    {
        $passwordReset = DB::table('password_resets')
        ->where('token' , $request->input('token'))->first();

        if(!$patient = Patient::where('email', $passwordReset->email)->first())
        {
            throw new NotFoundHttpException('User not found');
        }

        $patient->password = Hash::make($request->input('password'));
        $patient->save();

        return response([
            'message' => 'Reset password successfully'
        ]);
    }
}
