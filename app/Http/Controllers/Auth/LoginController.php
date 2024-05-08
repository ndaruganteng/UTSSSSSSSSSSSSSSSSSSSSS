<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }


    // fungsi login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();
            $role = $user->role;

            if ($role == 'admin') {
                return redirect('/dashboard');
            } elseif ($role == 'user') {
                return redirect('/');
            } else {
                Auth::logout();
                Session::flash('error', 'Level pengguna tidak valid');
                return redirect('/login');
            }
        } else {
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    
}