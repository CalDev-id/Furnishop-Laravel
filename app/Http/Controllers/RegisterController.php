<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index(){
        return view('signup', [
            'title' => 'sign up',
            'active' => 'signup'
        ]);
    }

    public function create(Request $request){
        // return request()->all();
        // return $request->all();
        //validate data
        $validatedData = $request -> validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required']
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        // dd('ayam');
        User::create($validatedData);

        // $request->session()->flash('success', 'Registration Successfull! Please Login');

        return redirect('/login')->with('success', 'Registration Successfull! Please Login');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required'=>'Email Wajib Diisi',
            'password.required'=>'Password Wajib Diisi'
        ]);

        $infoLogin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($infoLogin)){
            //sukses
            return redirect('/');
        }else{
            //gagal
            return redirect('/login')->with('success', 'User Tidak Ditemukan');
        }
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
