<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('login.index');
    }

    public function auth(Request $request) {
        $login = $request->validate([
            "email" => ["required"],
            "password" => ["required"],
        ]);
        
        if(Auth::attempt($login)) {
            $request -> session()->regenerate();

            return redirect()->intended('index');
        }

        return back()->with('loginError', 'Login Error ! Email atau Password Salah');
    }

    public function logout(Request $request) {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regeneratetoken();

        return redirect('/landing');

    }
}
