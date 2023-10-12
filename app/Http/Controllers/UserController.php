<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function userRegister(){
        return view('user.user_register');
    }


    public function store(Request $request){
        $validated = $request->validate([
                'name' => 'required|max:255',
                'phone' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:6|confirmed',
            ]);
            

            
        $validated['password'] = \Hash::make($validated['password']);
        $user = User::create($validated);
        session()->flash('message', 'Your registration is pending admin approval. Please wait for access.');
        return redirect()->route('login')->with('message', 'Your registration is pending admin approval. Please wait for access.'); 
    }




    public function loginUser(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::attempt(['email' => $validated['email'], 'password' => $validated['password'], 'status' => 1])) {
            return redirect()->route('home'); 
        }
        return back()->withErrors(['email' => 'Invalid Email'])->withErrors(['password' => 'Invalid Password'])->withInput()->with('message', 'Please write correct Email or Password.');
    }


    public function loginFrom(){
        return view('user.user_login');
    }
    public function logout(Request $request)
    {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return view('user.user_login'); 
    }
    

}

