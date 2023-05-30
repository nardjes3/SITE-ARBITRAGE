<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rencontre;
use App\Models\Arbitre;
use App\Models\payement;


use Illuminate\Support\Facades\DB;


class ArbitreController extends Controller
{
    function show(){
        $payement = payement::all();
        return view('Admin.payee',['payements'=>$payement]);
    }


    function Payed($id){
        $arb = Arbitre::find($id);
        $payement= DB ::table('payements')
        ->select('*')
        ->where('payements.nomArbi','=',$arb->nom )
        ->get();
        return view('Arbitre.Salaire',['arb'=>$arb],['payements'=>$payement]);
    }

    function designed($id){
        $arb = Arbitre::find($id);
        $rencontre= DB ::table('rencontres')
        ->select('*')
        ->where('rencontres.arbi1','=',$arb->nom )
        ->orWhere('rencontres.arbi2', '=', $arb->nom)
        ->get();
        return view('Arbitre.MyDesign',['arb'=>$arb],['rencontres'=>$rencontre]);
    }

    function upStatut($id){
        $payeStatut = payement::select('statut')->where('id', $id)->first();
        if($payeStatut->statut == "paid"){
            $statut = "impaid";
        }
        else{
            $statut = "paid";
        }
        payement::where('id', $id)->update(['statut' => $statut ]);
        return redirect()->back();
        
    }
    
}
