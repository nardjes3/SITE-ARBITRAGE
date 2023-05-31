<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rencontre;
use App\Models\payement;
use App\Models\Arbitre;
use App\Notifications\ArbitreDesigneNotification;


use Illuminate\Support\Facades\DB;

class DesignController extends Controller
{
    function show($id){
        $rencontre = rencontre::all();
        return view('Admin.ligue',['rencs'=>$id],['rencontres'=>$rencontre]);
    }
    function show2($id){
        $rencontre = rencontre::all();
        return view('Admin.ligue2',['rencs'=>$id],['rencontres'=>$rencontre]);
    }

    public function adddesign(Request $req)
    {
        
        $design = new rencontre;
        $paye = new payement;

        $design ->ligue= $req->input('ligue');
        $design ->day= $req->input('day');
        $design ->date= $req->input('date');
        $design ->heure_debut= $req->input('heure_debut');       
        $design ->heure_fin= $req->input('heure_fin');
        $design ->equipe1= $req->input('equipe1');
        $design ->equipe2= $req->input('equipe2');
        $design ->arbi1= $req->input('arbi1');
        $design ->arbi2= $req->input('arbi2');
        $design ->arbi3= $req->input('arbi3');
        $design ->arbi4= $req->input('arbi4');

        /***************arbi1 */
        $datasave = [

            'date'       => $req->input('date'),
            'equipe1'       =>  $req->input('equipe1'),
            'equipe2'  => $req->input('equipe2'),
            'nomArbi'=> $req->input('arbi1'),
            'statut'=> "impaid",
            'amount'=> $req->input('amount'),

            ];
            DB::table('payements')->insert($datasave);

      
/***************arbi2 */
$datasave = [

    'date'       => $req->input('date'),
    'equipe1'       =>  $req->input('equipe1'),
    'equipe2'  => $req->input('equipe2'),
    'nomArbi'=> $req->input('arbi2'),
    'statut'=> "impaid",
    'amount'=> $req->input('amount'),

    ];
    DB::table('payements')->insert($datasave);
/***************arbi3 *//************/
$datasave = [

    'date'       => $req->input('date'),
    'equipe1'       =>  $req->input('equipe1'),
    'equipe2'  => $req->input('equipe2'),
    'nomArbi'=> $req->input('arbi3'),
    'statut'=> "impaid",
    'amount'=> $req->input('amount'),

    ];
    DB::table('payements')->insert($datasave);
        /***************arbi4 *//************ */
        $datasave = [

            'date'       => $req->input('date'),
            'equipe1'       =>  $req->input('equipe1'),
            'equipe2'  => $req->input('equipe2'),
            'nomArbi'=> $req->input('arbi4'),
            'statut'=> "impaid",
            'amount'=> $req->input('amount'),

            ];
            DB::table('payements')->insert($datasave);


    $design -> save();

     // Récupérer l'ID de l'arbitre désigné
$nomArbi1 = $req->input('arbi1'); // Modifier en fonction de votre logique
$arbitre1 = Arbitre::where('nom', $nomArbi1)->first();
// Vérifier si l'ID de l'arbitre est valide
if ($arbitre1) {
    $arbitre1->notification_envoyee = true;
    $arbitre1->save();
}
     // Récupérer l'ID de l'arbitre désigné
     $nomArbi2 = $req->input('arbi2'); // Modifier en fonction de votre logique
     $arbitre2 = Arbitre::where('nom', $nomArbi2)->first();
     // Vérifier si l'ID de l'arbitre est valide
     if ($arbitre2) {
         $arbitre2->notification_envoyee = true;
         $arbitre2->save();
     }

          // Récupérer l'ID de l'arbitre désigné
$nomArbi3 = $req->input('arbi3'); // Modifier en fonction de votre logique
$arbitre3 = Arbitre::where('nom', $nomArbi3)->first();
// Vérifier si l'ID de l'arbitre est valide
if ($arbitre3) {
    $arbitre3->notification_envoyee = true;
    $arbitre3->save();
}


          // Récupérer l'ID de l'arbitre désigné
          $nomArbi4 = $req->input('arbi4'); // Modifier en fonction de votre logique
          $arbitre4 = Arbitre::where('nom', $nomArbi4)->first();
          // Vérifier si l'ID de l'arbitre est valide
          if ($arbitre4) {
              $arbitre4->notification_envoyee = true;
              $arbitre4->save();
          }
    return view('Admin.calendar',['design'=>$design]);
}
}
