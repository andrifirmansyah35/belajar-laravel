<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index',[
            'title' => 'Register',
            'active'=> 'Register'
        ]);
    }

    // public function store(){
    //     return request()->all();
    // }

    public function store(Request $request){
        // return $request->all();
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required','min:3','unique:users'],
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // dd('registrasi berhasil!!');
        // $validatedData['pasword'] = bcrypt($validatedData['password']);
        $validatedData['pasword'] = Hash::make($validatedData['password']);

        $request->session()->flash('success','Registrasion SuccessFull! Please Login');

        User::create($validatedData);
        return redirect('/login');
    }
}
