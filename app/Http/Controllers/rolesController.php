<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rolesController extends Controller
{
    public function index()
    {
        return view('roles');
    }

    public function chooseRole(Request $request)
    {
        $user = $request->user();

        if ($request->role != 'penyewa' && $request->role != 'user') {
            return redirect()->back();
        } else {
            $user->assignRole($request->role);
            // dd($user->assignRole($request->role));
            return redirect()->intended('/');
            
        }
    }
}
