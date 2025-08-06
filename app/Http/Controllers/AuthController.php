<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\User;

class AuthController extends Controller
{
    public function Login(){
        
        return view('auth.login');
    }


    public function Register(){
        
        return view('auth.register');
    }

    public function LoginPost(Request $request){
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Proses login
        if (auth()->attempt($request->only('email', 'password'))) {
            
            if (auth()->user()->role == 'admin') {
                return redirect()->route('admin.index');
            }
            return redirect()->route('beranda');
        }

        return back()->withErrors(['email' => 'Email atau password salah.']);
    }

    public function RegisterPost(Request $request){
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            
        ]);

        // Proses pendaftaran
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'user', // Default role
        ]);

        auth()->login($user);


        return redirect()->route('beranda');
    }

    public function Logout(){
        auth()->logout();
        return redirect()->route('beranda');
    }
}
