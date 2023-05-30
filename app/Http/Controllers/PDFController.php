<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use App\Models\Rep;
use Illuminate\Support\Facades\Storage;




class PDFController extends Controller
{
    
 
    public function sauvegarderRapport(Request $request)
{
    // Validate the incoming request data
    $validatedData = $request->validate([
        'contenu_pdf' => 'required', // Adjust the validation rules as needed
    ]);

    try {
        // Retrieve the validated PDF file

        // Store the PDF file in the specified directory
        $validatedData = $request->file('pdf')->store('contenu_pdf', 'public');


        Rep :: create($validatedData);

        // Respond with a JSON response or an appropriate redirection
        return response()->json(['message' => 'Rapport sauvegardé avec succès']);
    } catch (\Illuminate\Database\QueryException $e) {
        // Log the error
        \Log::error($e->getMessage());

        // Display a user-friendly error message or perform any other necessary actions
        return response()->json(['message' => 'An error occurred during the database query. Please try again later.'], 500);
    }
}

    

        
}
