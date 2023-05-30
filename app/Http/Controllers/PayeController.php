<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rencontre;
use App\Models\Arbitre;
use Illuminate\Support\Facades\DB;



class PayeController extends Controller
{
    
   
function arbiPay($id){
    $arb = Arbitre::find($id);
    $rencontre= DB ::table('rencontres')
    ->select('date')
    ->where('rencontres.arbi1','=',$arb->nom )
    ->get();
    return view('Admin.arbitre_dashboard',['arb'=>$arb],['rencontres'=>$rencontre]);
}
function Payed($id){
    $arb = Arbitre::find($id);
    $rencontre= DB ::table('rencontres')
    ->select('*')
    ->where('rencontres.arbi1','=',$arb->nom )
    ->get();
    return view('Arbitre.Salaire',['arb'=>$arb],['rencontres'=>$rencontre]);
}

}