<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\video;

class VideoController extends Controller
{
    function index()
    {
        return view("InsTech.index");
    }


    function fetch()
    {
      $data=video::all()->toArray();
      return view('videos',compact('data'));
    }

    function insert(Request $request)
    {
       $request->validate([
           'video' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm'
       ]);

       $file=$request->file('video');
       $file->move('upload',$file->getClientOriginalName());
       $file_name=$file->getClientOriginalName();

       $insert=new video();
       $insert->video = $file_name;
       $insert->level = $request->level;
       //$insert->question = $request->question;
       $insert->a = $request->a;
       $insert->b = $request->b;
       $insert-> c= $request->c;
       $insert->d = $request->d;
       $insert->ans = $request->ans;
       $insert->save();

       return redirect('/site_arbi/videos');
    }
 }