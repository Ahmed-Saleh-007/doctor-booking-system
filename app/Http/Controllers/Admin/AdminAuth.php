<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\AdminResetPassword;
use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Mail;

class AdminAuth extends Controller
{
    //login admin page function

    public function login()
    {
        return view('admin.auth.login');
    }

    //check admin login function

    public function loginCheck()
    {
        $rememberme = request('rememberme') == 1 ? true : false;
        if (admin()->attempt(['email' => request('email'), 'password' => request('password')], $rememberme)) {
            return redirect(aurl());
        } else {
            session()->flash('error', trans('admin.incorrect_information_login'));
            return redirect(aurl('login'));
        }
    }

    //logout function

    public function logout()
    {
        admin()->logout();
        return redirect(aurl('login'));
    }

    //forget password page

    public function forgotPassword()
    {
        return view('admin.auth.forgot_password');
    }

    //forget password message send

    public function forgotPasswordMessage()
    {
		$admin = Admin::where('email', request('email'))->first();
		if (!empty($admin)) {
			$token = app('auth.password.broker')->createToken($admin);
			$data  = DB::table('password_resets')->insert([
					'email'      => $admin->email,
					'token'      => $token,
					'created_at' => Carbon::now(),
				]);
			//Mail::to($admin->email)->send(new AdminResetPassword(['data' => $admin, 'token' => $token]));
			//session()->flash('success', trans('admin.the_link_reset_sent'));
            return new AdminResetPassword(['data' => $admin, 'token' => $token]);
		}
		return back();
    }

    //reset password page

    public function resetPassword($token)
    {
        $check_token = DB::table('password_resets')->where('token', $token)->where('created_at', '>', Carbon::now()->subHours(2))->first();
		if (!empty($check_token)) {
			return view('admin.auth.reset_password', ['data' => $check_token]);
		} else {
			return redirect(aurl('forgot/password'));
		}    
    }

    //reset password opearation and update data

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
			$admin = Admin::where('email', $check_token->email)->update([
					'email'    => $check_token->email,
					'password' => bcrypt(request('password'))
				]);
            DB::table('password_resets')->where('email', $check_token->email)->delete();
            //admin()->attempt(['email' => $check_token->email, 'password' => request('password')], true);
			session()->flash('success', 'passsword is reset you can login now');
			return redirect(aurl('login'));
		} else {
			return redirect(aurl('forgot/password'));
        }
    }
}
