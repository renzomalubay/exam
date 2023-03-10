<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //
    public function register(){
        return view('register');
    }


    public function store(Request $request){
        $validated = $request->validate([
            "fname" => ['required', 'min:4'],
            "lname" => ['required', 'min:4'],
            "username" => ['required', 'min:6'],
            "email" => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);
        // dd($request);
        $validated['password'] = bcrypt($validated['password']);

        $users = Users::create($validated);
        return view('login');

        // auth()->login($users);

        // return $users;
        // $users = DB::table('users')->insert([
        //     'fname' => $validated['fname'],
        //     'lname' => $validated['lname'],
        //     'username' => $validated['username'],
        //     'email' => $validated['email'],
        //     'password' => $validated['password']
        // ]);
    }
    public function authenticate(Request $request){
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return view('login');
    }
    public function edit(){
        
    }
}
