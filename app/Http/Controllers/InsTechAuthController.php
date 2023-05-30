<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class InsTechAuthController extends Controller
{
    public function login(Request $request) {
        // Validation logic for login request

        $credentials = $request->only('email', 'password');
        if (Auth::guard('instricteur_tech')->attempt($credentials)) {
            // Authentication passed, redirect to admin dashboard
            return redirect()->route('ins_tech.dashboard');
        } else {
            // Authentication failed, redirect back with error
            return "error";
        }
    }
    public function logout(Request $request) {
        Auth::guard('instricteur_tech')->logout();
     return redirect()->route('ins_tech.login.view');
    }
}
