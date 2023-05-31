<?php

namespace App\Http\Controllers;
use App\Models\Instructor_phi;

use Illuminate\Http\Request;

class InsPhiController extends Controller
{
    function show(){
        $instructor_phi = Instructor_phi::all();
        return view('Admin.NewInsPh',['instructor_phis'=>$instructor_phi]);
    }
}
