<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class InsPhiAuthController extends Controller{
public function login(Request $request) {
    // Validation logic for login request

    $credentials = $request->only('email', 'password');
    if (Auth::guard('instructor_phi')->attempt($credentials)) {
        // Authentication passed, redirect to admin dashboard
        return redirect()->route('InsPhi.insPH');
    } else {
        // Authentication failed, redirect back with error
        return "error";
    }
}
public function logout(Request $request) {
    Auth::guard('instructor_phi')->logout();
 return redirect()->route('ins_phi.login.view');
}
}
