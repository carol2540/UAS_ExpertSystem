<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function verifyLogin(Request $request)
    {
        $validated = $request -> validate([
            'email'=> "string|required",
            'password'=>"string|required"
        ]);

        if (Auth::attempt($validated)){
            // return "test";
            $request->session()->regenerate();
            return redirect()-> intended(route ('admin.dashboard'));
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
 
        request()->session()->invalidate();
 
        request()->session()->regenerateToken();
 
        return redirect('/');
    }
}
