<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    //
    public function getLogin()
    {
        if(Auth::check())
        {
            return redirect()->route('admin.dashboard');
        }
        else {
            return view('auth.login');
        }
    }

    public function postLogin(LoginRequest $request)
    {
        $login = [
            'email' => $request->email,
            'password' => $request->password,
            'level' => 1,
            'status' => 1
        ];

        if(Auth::attempt($login))
        {
            return redirect()->route('admin.dashboard');
        }
        else {
            return view('auth.login')->with('message' , 'Invalid email or password');
        }
    }

    public function getLogout()
    {
        Auth::logout();
        return view('auth.login');
    }
}
