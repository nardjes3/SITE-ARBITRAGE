<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\PdfFile;
use App\Models\sec_commission;

class PDFController extends Controller
{
    public function envoyerPDF(Request $request)
{
    // Validez les données de la requête
    $request->validate([
        'pdf' => 'required',
    ]);

    // Récupérez le fichier PDF envoyé par la requête
    $pdfFile = $request->file('pdf');

    // Obtenez le nom et le prénom de l'arbitre
    $nom = Auth::guard('arbitre')->user()->nom; // Remplacez par la valeur appropriée
    $prenom = Auth::guard('arbitre')->user()->prenom; // Remplacez par la valeur appropriée

    // Enregistrez le fichier PDF
    $path = $pdfFile->store('pdf_files');

    // Enregistrez les détails du PDF dans la base de données
    $pdf = new PdfFile();
    $pdf->nom = $nom;
    $pdf->prenom = $prenom;
    $pdf->fichier = $path;
    $pdf->save();
    $admin = Auth::guard('sec_commission')->user();

if ($admin instanceof sec_commission) {
    $admin->report_envoyee = true; // Mettez la valeur à false si vous souhaitez définir la notification comme non envoyée.
    $admin->save();
}
    return redirect()->back()->with('success', 'PDF enregistré avec succès dans la base de données.');
}

}
