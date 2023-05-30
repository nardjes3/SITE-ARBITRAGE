<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programme;

class ProgramController extends Controller
{
    public function create()
    {
        return view('formulaire');
    }

    public function store(Request $request)
    {
        $programme = new Programme;
        $programme->semaines = $request->input('semaines');
        $programme->jour = $request->input('jour');
       
        $programme->activite = $request->input('activite');
        $programme->save();

        // Rediriger vers la page de confirmation
        return redirect()->route('formulaire');
    }

   
    public function index()
{
    $programmes = Programme::all();
    return view('index', ['programmes' => $programmes]);

}



public function maFonction()
{
    // Récupérer les programmes de la base de données
    $programmes = Programme::all();

    // Regrouper les programmes par semaine
    $programmesParSemaine = $programmes->groupBy('semaines');

    // Initialiser la variable $autresProgrammes avec une valeur par défaut
    $autresProgrammes = [];

    // Vérifier si des programmes ont été trouvés pour d'autres semaines
    if ($programmesParSemaine->count() > 1) {
        // Récupérer les programmes pour les autres semaines
        $autresProgrammes = $programmesParSemaine->slice(1);
    }

    // Passer les programmes par semaine et les programmes pour les autres semaines à la vue
    return view('afprog', [
        'programmes' => $programmesParSemaine->first(),
        'autresProgrammes' => $autresProgrammes
    ]);
   
}
public function updateBySemaine(Request $request, $semaine)
{
    $programmes = Programme::where('semaines', $semaine)->get();

    foreach ($programmes as $programme) {
        $programme->jour = $request->input('jours.'.$programme->id.'.jour');
        $programme->activite = $request->input('jours.'.$programme->id.'.activite');
        $programme->save();
    }

    return redirect()->route('afprog')->with('success', 'Les programmes pour la semaine '.$semaine.' ont été mis à jour avec succès.');
}



}




