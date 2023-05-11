<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arbitre;
use Illuminate\Support\Facades\DB;

class AnalyController extends Controller
{
    public function statistic(){
        $arbitre = DB::table('arbitres')->count();
        $instructor = DB::table('sec_commissions')->count();
        $ad = DB::table('arbitres')
        ->where('niv' , 'advenced')
        ->count();
        $beg = DB::table('arbitres')
        ->where('niv' , 'beginner')
        ->count();
        $int = DB::table('arbitres')
        ->where('niv' , 'intermediate')
        ->count();

        return view('Admin.analytic', compact('arbitre', 'instructor', 'ad', 'beg', 'int'));
    }
   

}
