<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginAuthentication(Request $request){
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return 1;
        }
        else{
            return 0;
        }
    }
    public function logout() {
        Auth::logout();
        return 1;
    }
}
