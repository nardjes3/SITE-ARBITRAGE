<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profile;
class ProfileController extends Controller
{
    public function show($id){
        $profile = profile::find($id);
        return view('prflinstech.show',['profile'=>$profile]);
    }
}
