<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function postLogin(Request $request)
    {
        /* dd($request->all()); */
        if(Auth::attempt($request->only('email', 'password'))) {
            if (Auth::user()->level == 'user') {
                return redirect('/');
            }

        }
        return redirect('/login');
    }

    public function postRegister(Request $request) {
        $user = new \App\Models\User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->remember_token = Str::random(20);
        $user->alamat = $request->alamat;
        $user->fullname = $request->fullname;
        $user->phonenumber = $request->phonenumber;
        $user->gender = $request->gender;
        $user->save();
        return redirect('/login');
        /* dd($request->all()); */
    }
}
