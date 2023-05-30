<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class TestController extends Controller
{
   
    public function video(Request $request)
{
    $videos = DB::table('videos')->get();

    // Vérifier si une vidéo a été sélectionnée
    if ($request->has('selected_video_id')) {
        $selected_video_id = $request->input('selected_video_id');
        session(['selected_video_id' => $selected_video_id]);
    }

    // Récupérer la vidéo sélectionnée
    $selected_video = null;
    if (session()->has('selected_video_id')) {
        $selected_video_id = session('selected_video_id');
        $selected_video = DB::table('videos')->where('id', $selected_video_id)->first();
    }

    return view('test', ['videos' => $videos, 'selected_video' => $selected_video]);
}

}
