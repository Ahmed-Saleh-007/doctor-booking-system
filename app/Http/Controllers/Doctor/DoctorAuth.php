<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\DoctorResetPassword;
use App\Models\Doctor;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Mail;

class DoctorAuth extends Controller
{
    //Register Doctor Page Function
    public function signup()
    {
        return view('doctor.auth.signup');
    }
    
    ///Login Doctor page function
    public function login()
    {
        return view('doctor.auth.login');
    }

    //Check Doctor Login function
    public function loginCheck()
    {
        $rememberme = request('rememberme') == 1 ? true : false;
        if (doctor()->attempt(['email' => request('email'), 'password' => request('password')], $rememberme)) {
            return redirect(durl());
        } else {
            session()->flash('error', trans('admin.incorrect_information_login'));
            return redirect(durl('login'));
        }
    }

    //Doctor Logout Function
    public function logout()
    {
        doctor()->logout();
        return redirect(durl('login'));
    }

    //Forget Password Page
    public function forgotPassword()
    {
        return view('doctor.auth.forgot_password');
    }

    //forget password message send
    public function forgotPasswordMessage()
    {
		$doctor = Doctor::where('email', request('email'))->first();
		if (!empty($doctor)) {
			$token = app('auth.password.broker')->createToken($admin);
			$data  = DB::table('password_resets')->insert([
					'email'      => $admin->email,
					'token'      => $token,
					'created_at' => Carbon::now(),
				]);
			//Mail::to($admin->email)->send(new AdminResetPassword(['data' => $admin, 'token' => $token]));
			//session()->flash('success', trans('admin.the_link_reset_sent'));
            return new DoctorResetPassword(['data' => $doctor, 'token' => $token]);
		}
		return back();
    }

    //Reset Password Page
    public function resetPassword($token)
    {
        $check_token = DB::table('password_resets')->where('token', $token)->where('created_at', '>', Carbon::now()->subHours(2))->first();
		if (!empty($check_token)) {
			return view('admin.auth.reset_password', ['data' => $check_token]);
		} else {
			return redirect(aurl('forgot/password'));
		}    
    }

    //Reset Password Opearation and Update Data
    public function resetPasswordUpdateData($token)
    {
        request()->validate([
            'password'              => 'required|confirmed',
			'password_confirmation' => 'required',
        ], [], [
            'password'              => 'Password',
			'password_confirmation' => 'Confirmation Password',
        ]);

        $check_token = DB::table('password_resets')->where('token', $token)->where('created_at', '>', Carbon::now()->subHours(2))->first();
		if (!empty($check_token)) {
			$doctor = Doctor::where('email', $check_token->email)->update([
					'email'    => $check_token->email,
					'password' => bcrypt(request('password'))
				]);
            DB::table('password_resets')->where('email', $check_token->email)->delete();
            //admin()->attempt(['email' => $check_token->email, 'password' => request('password')], true);
			session()->flash('success', 'passsword is reset you can login now');
			return redirect(durl('login'));
		} else {
			return redirect(durl('forgot/password'));
        }
    }
}