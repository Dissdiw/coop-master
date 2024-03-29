<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ForgetPassController extends Controller
{
    public function forgetPassword()
    {
        return view('pages.forgotpass');
    }

    function forgetPasswordPost(Request $request)
    {
        $request->validate([
            'email'=>"required|email|exists:students",
        ]);

        $token = Str::random(64);

        DB::table('password_reset_tokens')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send("emails.forget-password", ['token' => $token], function ($message) use ($request){
            $message->to($request->email);
            $message->subject("Reset Password");
        });

        return redirect()->to(route("forget.password"))->with("Success", "We have send an Email to reset password.");
    }
 
    function resetPassword($token)
    {
        return view("new-password", compact('token'));
    }

    function resetPasswordPost(Request $request)
    {
        $request->validate([
            "emails" => "required|email|exists:students",
            "password" => "required|string|min:8|confirmed",
            "password_confirmation" => "required|"
        ]);

        $updatePassword = DB::table('password_reset_tokens')->where([
            "email" => $request->email,
            "token" => $reauest->token
        ])->first();

        if (!$updatePassword){
            return redirect()->to(route("reset.password"))->with("error", "Invalid");
        }

        User::where("Email", $request->email)->update(["password" => Hash::make($request->password)]);

        DB::table("password_reset_tokens")->where(["email" => $request->email])->delete();

        return redirect()->to(route("login"))->with("Success" , "Password reset success");
    }
}
