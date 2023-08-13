<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\Return_;

class AuthController extends Controller
{
    public function signup()
    {
        return view('auth.signup');
    }

    public function signupPost(Request $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return back()->with('success', 'Signup successfully');
    }

    public function login(){
        return view('auth.login');
    }

    public function loginPost(Request $request){
        $credetials = [
            'name'=> $request->name,
            'password'=> $request->password,
        ];

        if (Auth::attempt($credetials)) {
            return redirect('/HomePage')->with('Success', 'Login berhasil');
        }

        return back()->with('error', 'Password salah');
    }
}
