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
       
        $user1 = sec_commission::where('login', '=',$request->email)->first();
        $user2 = Arbitre::where('login', '=',$request->email)->first();
        if($user1 && $request->password == $user1->mtps){
        
          return redirect('/Sec');
           
        }
        else if ($user2 && $request->password == $user2->mtps){
            $arb = Arbitre::find($user2->id);
            return view('Admin.ArbitreTest',['arb'=>$arb]);
        }
        else{
            return "error";
        }
        
    }

    //     $user = User::where('email', '=',$request->email)->first();
    //     if($user && $request->password == $user->password){
    //         $role=$user->rl;
    //         echo $role;
    //             switch($role){
    //                 case 0:
    //                     return redirect('/arbitre');
    //                     break;
    //                 case 1:
    //                     return redirect('/dash');
    //                     break;
    //                 case 2:
    //                     return redirect('/ins_tech');
    //                     break;
    //                 case 3:
    //                      return redirect('/ins_phy');
    //                     break;    
    //                 default:
    //                     Auth::logout();
    //                     return redirect('/')->with('error','oopss');}

    //     }
    //     else{
    //         return "error";
    //     }
        
    // }
}
