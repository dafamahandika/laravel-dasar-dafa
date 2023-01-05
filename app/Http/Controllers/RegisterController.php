<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index() {
        return view('register.index');
    }

    public function store(Request $request ) {
        $credentials = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required',],

        ]);

        $credentials ['password'] = bcrypt($credentials['password']);
        
        User::create($credentials);

        return redirect('/login')
        -> with('success', 'Register Berhasil, Silahkan Login !');
    }
}
