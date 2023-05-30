<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use App\Models\sec_commission;
use App\Models\Arbitre;
use Illuminate\Http\Request;
use Illuminate\Http\Support\Facaded\Hash;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function login(Request $request){
        $credentials = $request->only('email', 'password');
        if (Auth::guard('arbitre')->attempt($credentials)) {
            // Authentication passed, redirect to admin dashboard
            return redirect()->route('arbitre.dashboard');
        }else 
        if (Auth::guard('sec_commission')->attempt($credentials)) {
            // Authentication passed, redirect to admin dashboard
            return redirect()->route('Admin.dash');
        }else
         if (Auth::guard('instricteur_tech')->attempt($credentials)) {
            // Authentication passed, redirect to admin dashboard
            return redirect()->route('ins_tech.dashboard');
        } else
        if (Auth::guard('instructor_phi')->attempt($credentials)) {
            // Authentication passed, redirect to admin dashboard
            return redirect()->route('InsPhi.insPH');
        }
        else {
            // Authentication failed, redirect back with error
            return "error";
        }
    }
   
}