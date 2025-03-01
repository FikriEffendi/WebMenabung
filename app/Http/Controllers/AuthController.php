<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        request()->validate([
            'email' => 'email|required',
            'password' => 'required|max:6',
        ]);

        if (Auth::attempt(request()->only('email', 'password'))) {
            return redirect('/');
        }

        return back()->withErrors(['email' => "Email atau password salah"]);
    }

    public function register()
    {
        $validator = request()->validate([
            'name' => "required|max:90",
            'email' => "email|required|unique:users,email",
            'password' => 'required|max:6|confirmed',
        ]);

        User::create($validator);

        return redirect('/login');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}
