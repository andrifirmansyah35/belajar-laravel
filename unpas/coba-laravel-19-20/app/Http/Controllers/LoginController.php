<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
        // return User::all();
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
        // // return back()->withError('loginError','Login Error');
        return back()->with('loginError','Login Error');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();    
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
