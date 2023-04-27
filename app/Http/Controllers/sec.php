<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sec_commission;

class sec extends Controller
{
    public function affSec(){
        $secs = sec_commission::All();
        return view('Admin.profile', ['secs'=>$secs]); 
    }

    public function edit($id){
        $sec = sec_commission::find($id);
        $secs = sec_commission::All();
        return view('Admin.profile', ['sec'=>$sec],['secs'=>$secs]); 

    }

    public function update(Request $request, $id){

        $sec = sec_commission::find($id);

        $request -> validate([
            'name' => 'required',
            'lastName' => 'required'
        ]);

        $sec->name = $request->input('name');
        $sec->name = $request->input('lastName');
        $sec->name = $request->input('email');
        $sec->name = $request->input('num_tel');
        $sec->name = $request->input('Birthday');
        $sec->name = $request->input('Gender');
        $sec->name = $request->input('Country');
        $sec->name = $request->input('typeSport');
        $sec->name = $request->input('role');
        $sec->name = $request->input('level');
        $sec->name = $request->input('newpass');
        $sec->name = $request->input('confirmpass');

        if($request->hasFile('photo')){
            $distination_path='public/images/imagesAdmin';
            $image=$request->file('photo');
            $image_name=$image->getClientOriginalName();
            $path=$request->file('photo')->storeAs($distination_path,$image_name);

            $sec->photo=$image_name;
        }
        $sec->update();
            return redirect()->back();
        }







    }
