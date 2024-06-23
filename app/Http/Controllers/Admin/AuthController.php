<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (auth()->attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }
        return to_route('login')->withErrors(['email' => 'The provided credentials do not match our records.']);
    }

    public function logout()
    {
        auth()->logout();
        return to_route('login');
    }
}
