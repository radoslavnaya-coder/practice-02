<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function signup()
    {
        return view('components.signup');
    }
    public function signupPost(Request $request){
        $user = new User();

        $user->name = $request->name;
        $user->login = $request->login;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();
        
        return back()->with('success','Register successfully');
    }
    public function login(){
        return view('components.login');
    }
    public function loginPost(Request $request){
        $credetials = [
            'login' => $request->login,
            'password' => $request->password,
        ];
        if (Auth::attempt($credetials)){
            return redirect ('/test')->with('success', 'Login confirmed');
        }
        return back()->with('error', 'Login or Password not allowed');
    }
}
