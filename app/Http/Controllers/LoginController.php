<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{   
    public function loginview()
    {
        return view('loginRegis.login');
    }

    public function loginproses(Request $request)
    {
        $credentials = $request->only('nohp', 'password');

        if (Auth::attempt($credentials)) {
            // Autentikasi berhasil
            return redirect()->intended('/dashboard');
        } else {
            // Autentikasi gagal
            return redirect()->back()->withInput($request->only('nohp'))->withErrors([
                'nohp' => 'No HP atau password salah.',
            ]);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}
