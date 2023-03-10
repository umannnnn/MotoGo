<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index()
    {
        return view('loginRegis');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:6',
        ]);


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $redirect = '/role';
            if (Auth::user()->hasRole('admin')) {

                $redirect = 'dashboard';
            }
            return redirect()->intended($redirect)->with('loginSuccess', 'Login Berhasil');
        }
        return back()->with('loginError', 'Login Gagal');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
