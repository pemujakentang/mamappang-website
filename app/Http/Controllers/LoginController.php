<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index()
    {
        // kalo udh login, ga bs balik ke login
        if (Auth::check()) {
            return redirect()->intended('/menu');
        }
        return view('Authfolder.login');
    }

    public function signup_view()
    {
        return view('Authfolder.signup');
    }

    public function signup(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => '',
            'email' => 'required|email:dns|unique:users',
            'no_telp' => 'required',
            'password' => 'required|min:8|max:20'
        ]);


        $user = new User();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email; // email harus unik
        $user->password = bcrypt($request->password);
        $user->no_telp = $request->no_telp;
        $user->role = 'user';
        $user->save();

        return redirect('/login')->with('success', 'Your account has been created!');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            // regenerate biar ga kena session fixation
            $request->session()->regenerate();

            return redirect()->intended('/menu');
        } else {
            return back()->with('loginError', 'Invalid Email or Password');
        }
    }

    public function logout()
    {
        return route('login');
    }
}
