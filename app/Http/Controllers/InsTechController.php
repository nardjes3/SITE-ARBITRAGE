<?php

namespace App\Http\Controllers;
use App\Models\Instricteur_tech;

use Illuminate\Http\Request;

class InsTechController extends Controller
{
    function show(){
        $instricteur_tech = Instricteur_tech::all();
        return view('Admin.NewInsTech',['instricteur_techs'=>$instricteur_tech]);
    }
}
