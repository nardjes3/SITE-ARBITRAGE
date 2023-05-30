<?php

use App\Models\InstructeurPhies;
class InstructeurPhyController extends Controller
{
    

    public function showProfile()
    {
        $user = Auth::user();
    
        return view('profile', compact('user'));
    }
}