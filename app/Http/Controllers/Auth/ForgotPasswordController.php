<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    public function index()
    {
       return view('auth.forget-password');
    }

    public function send(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(60);

        DB::table('password_reset_tokens')->insert(
            ['email' => $request->email, 'token' => $token, 'created_at' => Carbon::now()]
        );

        Mail::send('mail.reset',['token' => $token, 'email' => $request->email], function($message) use ($request) {
                  $message->to($request->email);
                  $message->subject('Reset Password');
               });

        return back()->with('success', 'Link reset password telah dikirim ke email Anda.');
    }

    public function reset($token)
    {
        $tokenData = DB::table('password_reset_tokens')
            ->where('token', $token)->first();

        if (!$tokenData) {
            return redirect()->route('login')->with('message', 'Invalid token.');
        }

        $tokenCreated = Carbon::parse($tokenData->created_at);
        $tokenLife = $tokenCreated->diffInMinutes(Carbon::now());

        if ($tokenLife > 60) {
            DB::table('password_reset_tokens')->where('token', $token)->delete();
            return redirect()->route('login')->with('error', 'Token kadaluarsa silahkan coba lagi.');
        }

        return view('auth.reset-password', ['token' => $token], ['email' => $tokenData->email]);
    }

    public function update(Request $request, $token)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);

        $tokenData = DB::table('password_reset_tokens')
            ->where('token', $token)->first();

        if (!$tokenData) {
            return redirect()->route('login')->with('error', 'Invalid token.');
        }

        DB::table('users')
            ->where('email', $request->email)
            ->update(['password' => bcrypt($request->password)]);

        DB::table('password_reset_tokens')->where('email', $request->email)->delete();

        return redirect()->route('login')->with('success', 'Password berhasil diubah.');
    }
}
