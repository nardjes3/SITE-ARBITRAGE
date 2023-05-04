<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sec_commission;

class adminController extends Controller
{
    function show(){
        $data = sec_commission::all();
        return view('Admin.profile',['sec_commissions'=>$data]);
    }
    function edit($id){
        $data= sec_commission::find($id);
        return view('Admin.profile',['data'=>$data]);
    }
    function update(Request $request){
        $data= sec_commission::find($request ->id);
        $request -> validate([
            'name' => 'required',
            'lastName' => 'required'
        ]);

        $data->name = $request->name;
        $data->lastName = $request->lastName;
        $data->email = $request->email;
        $data->num_tel = $request->num_tel;
        $data->Birthday = $request->Birthday;
        $data->Gender = $request->Gender;
        $data->Country = $request->Country;
        $data->typeSport = $request->typeSport;
        $data->role = $request->role;
        $data->level = $request->level;
        

        $data->update();
        return redirect()->back();

    }

}
