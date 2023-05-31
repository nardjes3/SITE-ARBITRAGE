<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rencontre;
use App\Models\Arbitre;
use App\Models\payement;
use App\Notifications\ArbitrePayedNotification;
use App\Models\PdfFile;



use Illuminate\Support\Facades\DB;


class ArbitreController extends Controller
{
    function show(){
        $payement = payement::all();
        return view('Admin.payee',['payements'=>$payement]);
    }

    function showPdf(){
        $Pdf = PdfFile::all();
        return view('Admin.report',['pdf_files'=>$Pdf]);
    }


    function Payed($id){
        $arb = Arbitre::find($id);
        $payement= DB ::table('payements')
        ->select('*')
        ->where('payements.nomArbi','=',$arb->nom )
        ->get();
        $arbitre = Arbitre::find($id);

        if ($arbitre) {
                $arbitre->paye_envoyee = 0; // Mettez la valeur à 0 ou à false si vous souhaitez définir la notification comme non envoyée.
                $arbitre->save();
            }

        return view('Arbitre.Salaire',['arb'=>$arb],['payements'=>$payement]);
    }

    function designed($id){
        $arb = Arbitre::find($id);
        $rencontre= DB ::table('rencontres')
        ->select('*')
        ->where('rencontres.arbi1','=',$arb->nom )
        ->orWhere('rencontres.arbi2', '=', $arb->nom)
        ->orWhere('rencontres.arbi3', '=', $arb->nom)
        ->orWhere('rencontres.arbi4', '=', $arb->nom)
        ->get();
        $arbitre = Arbitre::find($id);

        if ($arbitre) {
                $arbitre->notification_envoyee = 0; // Mettez la valeur à 0 ou à false si vous souhaitez définir la notification comme non envoyée.
                $arbitre->save();
            }
        
        return view('Arbitre.MyDesign',['arb'=>$arb],['rencontres'=>$rencontre]);
    }


function upStatut($id)
{
    $payeStatut = Payement::select('statut', 'nomArbi')->where('id', $id)->first();

    if ($payeStatut->statut == "paid") {
        $statut = "impaid";
    } else {
        $statut = "paid";

        $arbitre = Arbitre::where('nom', $payeStatut->nomArbi)->first();

        if ($arbitre) {
            $arbitre->paye_envoyee = 1; // Set the value to 0 or false if you want to mark the notification as not sent.
            $arbitre->save();
        }
    }

    Payement::where('id', $id)->update(['statut' => $statut]);

    return redirect()->back();
}

    
}
