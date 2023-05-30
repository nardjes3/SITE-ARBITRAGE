<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class AdminAuthController extends Controller
{
    public function login(Request $request) {
        // Validation logic for login request

        $credentials = $request->only('email', 'password');
        if (Auth::guard('sec_commission')->attempt($credentials)) {
            // Authentication passed, redirect to admin dashboard
            return redirect()->route('Admin.dash');
        } else {
            // Authentication failed, redirect back with error
            return "error";
        }
    }
    public function logout(Request $request) {
        Auth::guard('sec_commission')->logout();
     return redirect()->route('admin.login.view');
    }
}
