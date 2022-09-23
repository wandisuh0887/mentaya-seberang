<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }

    public function do_login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::guard('web')->attempt($credentials)) {
            if(Auth::user()->status == 0) {
                Auth::logout();
                return redirect()->route('admin.login')->with('message','Status akun Anda tidak aktif');
            }
            return redirect()->route('dashboard')->withSuccess('Signed in');
        }else {
            return redirect()->route('admin.login')->with('message','Login details are not valid');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
