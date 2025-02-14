<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showForm(){
        return view('layouts.auth.login');
    }

    public function login(Request $request) {
        
        $email = $request->email;
        $password = $request->password;
        $status = Auth::attempt(['email'=>$email, 'password'=>$password]);
        
        if ($status) {
            $user = Auth::user();
        
            if ($user->is_admin) {
                return redirect()->route('admin.dashboard')->with('success', 'Hi admin');
            }
        
            return redirect()->route('client.home')->with('success', 'Hi user');
        }

        return redirect()->route('auth.login')->with('error', 'An error has occurred. Please try again later.');
    }
}
