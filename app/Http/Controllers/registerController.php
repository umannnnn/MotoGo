<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class registerController extends Controller
{
    public function index()
    {
        return view('loginRegis');
    }

    public function store(Request $request)
    {
        $validateDate = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6',
        ]);

        $validateDate['password'] = bcrypt($validateDate['password']);

        User::create($validateDate);
        // $request->session()->flash('berhasil', 'Silahkan Login');

        return redirect('/login')->with('berhasil', 'Silahkan Login');
    }
}
