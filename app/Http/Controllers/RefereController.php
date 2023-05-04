<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arbitre;

class RefereController extends Controller
{
    function show(){
        $data = Arbitre::all();
        return view('Admin.list_ar',['Arbitres'=>$data]);
    }
    
    public function addArbi(Request $req)
    {
        $arbi = new Arbitre;

        $arbi ->nom= $req->input('nom');
        $arbi ->prenom= $req->input('prenom');
        $arbi ->login= $req->input('login');
        $arbi ->role= $req->input('role');
        $arbi ->genre= $req->input('genre');
        $arbi ->pays= $req->input('pays');
        $arbi ->typeSport= $req->input('typeSport');
        $arbi ->etat= $req->input('etat');
        $arbi ->role2= $req->input('role2');
        $arbi ->mtps= $req->input('mtps');
        $arbi ->niv= $req->input('niv');
        $arbi ->image= $req->input('image');

        

    if($req->hasFile('image')){
        $distination_path='public/images/imagesAdmin';
        $image=$req->file('image');
        $image_name=$image->getClientOriginalName();
        $path=$request->file('image')->storeAs($distination_path,$image_name);

        $arbi->image=$image_name;
    }
    $arbi -> save();
        return redirect()->back();}

    function edit($id){
        $data= Arbitre::find($id);
        return view('Admin.upArbi',['data'=>$data]);
    }
    
    function update(Request $req){
        $data= Arbitre::find($req ->id);

        $req -> validate([
            'nom' => 'required',
            'prenom' => 'required'
        ]);

        $data->nom = $req->nom;
        $data->prenom = $req->prenom;
        $data->login = $req->login;
        $data->role = $req->role;
        $data->pays = $req->pays;
        $data->typeSport = $req->typeSport;
        $data->role2 = $req->role2;
        $data->etat = $req->etat;
        $data->role = $req->role;
        $data->image = $req->image;
        
        if($req->hasFile('image')){
            $distination_path='public/images/imagesAdmin';
            $image=$req->file('image');
            $image_name=$image->getClientOriginalName();
            $path=$request->file('image')->storeAs($distination_path,$image_name);
    
            $data->image=$image_name;
        }

        $data->save();
        return redirect('list');

    }
    function delete($id) {
        $data= Arbitre::find($id);
        $data ->delete();
        return redirect('list');
    }

}
