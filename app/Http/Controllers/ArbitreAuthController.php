<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class ArbitreAuthController extends Controller
{
    public function login(Request $request) {
        // Validation logic for login request

        $credentials = $request->only('email', 'password');
        if (Auth::guard('arbitre')->attempt($credentials)) {
            // Authentication passed, redirect to admin dashboard
            return redirect()->route('arbitre.dashboard');
        } else {
            // Authentication failed, redirect back with error
            return "error";
        }
    }
    public function logout(Request $request) {
        Auth::guard('arbitre')->logout();
     return redirect()->route('arbitre.login.view');
    }
}
